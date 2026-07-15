const http = require('http');
const { spawn } = require('child_process');
const path = require('path');
const fs = require('fs');

const PORT = 8000;
const PUBLIC_DIR = path.join(__dirname, 'public');
const PHP_CGI = '/home/z/.local/php/usr/bin/php-cgi8.4';
const PHP_INI = path.join(__dirname, 'php.ini');

const BASE_ENV = {
  PATH: '/home/z/.local/bin:/usr/local/bin:/usr/bin:/bin',
  LD_LIBRARY_PATH: '/home/z/.local/php/usr/lib/x86_64-linux-gnu',
  PHPRC: PHP_INI,
  HOME: '/home/z',
  APP_ENV: 'local',
};

const MIME = {
  '.css':'text/css','.js':'application/javascript','.png':'image/png',
  '.jpg':'image/jpeg','.jpeg':'image/jpeg','.gif':'image/gif',
  '.svg':'image/svg+xml','.ico':'image/x-icon','.woff':'font/woff',
  '.woff2':'font/woff2','.ttf':'font/ttf','.webp':'image/webp',
  '.pdf':'application/pdf','.json':'application/json',
};

const server = http.createServer((req, res) => {
  const url = req.url;
  const uri = decodeURIComponent(url.split('?')[0]);

  // Serve static files
  if (uri !== '/' && uri.indexOf('/api/') !== 0) {
    const fp = path.join(PUBLIC_DIR, uri);
    if (fs.existsSync(fp) && fs.statSync(fp).isFile()) {
      const ext = path.extname(fp).toLowerCase();
      res.writeHead(200, { 'Content-Type': MIME[ext] || 'application/octet-stream' });
      fs.createReadStream(fp).pipe(res);
      return;
    }
  }

  // Handle POST/PUT body
  let bodyBuf = [];
  req.on('data', c => bodyBuf.push(c));
  req.on('end', () => {
    const body = Buffer.concat(bodyBuf);

    const phpEnv = {
      ...BASE_ENV,
      REQUEST_METHOD: req.method,
      REQUEST_URI: url,
      SCRIPT_NAME: '/index.php',
      SCRIPT_FILENAME: path.join(PUBLIC_DIR, 'index.php'),
      DOCUMENT_ROOT: PUBLIC_DIR,
      SERVER_NAME: req.headers.host || 'localhost',
      SERVER_PORT: String(PORT),
      SERVER_PROTOCOL: 'HTTP/1.1',
      GATEWAY_INTERFACE: 'CGI/1.1',
      REMOTE_ADDR: req.socket.remoteAddress || '127.0.0.1',
      CONTENT_TYPE: req.headers['content-type'] || '',
      CONTENT_LENGTH: String(body.length),
      HTTP_HOST: req.headers.host || 'localhost',
      HTTP_ACCEPT: req.headers.accept || '*/*',
      HTTP_USER_AGENT: req.headers['user-agent'] || '',
      HTTP_REFERER: req.headers.referer || '',
      HTTP_COOKIE: req.headers.cookie || '',
      HTTP_X_REQUESTED_WITH: req.headers['x-requested-with'] || '',
      REDIRECT_STATUS: '200',
    };

    const php = spawn(PHP_CGI, [], {
      cwd: __dirname,
      env: phpEnv,
      stdio: ['pipe', 'pipe', 'pipe'],
    });

    // Write POST body to PHP stdin
    if (body.length > 0) php.stdin.write(body);
    php.stdin.end();

    let outputBuf = [];

    php.stdout.on('data', chunk => outputBuf.push(chunk));

    php.stderr.on('data', chunk => {
      const msg = chunk.toString();
      if (msg.includes('Fatal') || msg.includes('Error:') || msg.includes('error')) {
        console.error('PHP:', msg.substring(0, 300));
      }
    });

    php.on('close', () => {
      const raw = Buffer.concat(outputBuf).toString('utf-8');

      // Parse CGI response: headers block \r\n\r\n then body
      const sep = raw.indexOf('\r\n\r\n');
      if (sep !== -1) {
        const headBlock = raw.substring(0, sep);
        const respBody = raw.substring(sep + 4);
        const lines = headBlock.split('\r\n');

        // First line may be HTTP status
        let statusCode = 200;
        let headers = {};
        let startIdx = 0;

        if (lines[0].startsWith('HTTP/')) {
          const m = lines[0].match(/\d{3}/);
          if (m) statusCode = parseInt(m[0]);
          startIdx = 1;
        }

        for (let i = startIdx; i < lines.length; i++) {
          const ci = lines[i].indexOf(':');
          if (ci !== -1) {
            const key = lines[i].substring(0, ci).trim();
            const val = lines[i].substring(ci + 1).trim();
            if (key.toLowerCase() === 'status') {
              const sm = val.match(/\d{3}/);
              if (sm) statusCode = parseInt(sm[0]);
            } else {
              headers[key] = val;
            }
          }
        }

        res.writeHead(statusCode, headers);
        res.end(respBody);
      } else {
        res.writeHead(200, { 'Content-Type': 'text/html; charset=utf-8' });
        res.end(raw);
      }
    });

    req.on('error', () => php.kill());
    php.on('error', err => {
      console.error('PHP spawn error:', err.message);
      if (!res.headersSent) res.writeHead(502);
      res.end('Bad Gateway');
    });
  });
});

server.on('error', err => {
  if (err.code === 'EADDRINUSE') {
    console.error(`Port ${PORT} already in use`);
  }
});

server.listen(PORT, '0.0.0.0', () => {
  console.log(`Tenedam Node+PHP-CGI server running on http://0.0.0.0:${PORT}`);
});