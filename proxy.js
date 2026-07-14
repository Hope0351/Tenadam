const http = require('http');
const fs = require('fs');
const path = require('path');
const { execFileSync } = require('child_process');

const PORT = 8000;
const PUBLIC = path.join(__dirname, 'public');
const PHP = '/home/z/.local/php/usr/bin/php8.4';
const INDEX = path.join(PUBLIC, 'index.php');

const MIME = {
    '.css':'text/css','.js':'application/javascript','.png':'image/png',
    '.jpg':'image/jpeg','.gif':'image/gif','.svg':'image/svg+xml',
    '.ico':'image/x-icon','.woff2':'font/woff2','.woff':'font/woff',
    '.ttf':'font/ttf','.json':'application/json','.webp':'image/webp',
    '.pdf':'application/pdf','.mp4':'video/mp4',
};

http.createServer((req, res) => {
    // Parse URL
    const parsed = new URL(req.url, `http://${req.headers.host}`);
    const urlPath = decodeURIComponent(parsed.pathname);
    const file = path.join(PUBLIC, urlPath);

    // Serve static file if exists and not a PHP file
    if (urlPath !== '/' && fs.existsSync(file) && fs.statSync(file).isFile() && !file.endsWith('.php')) {
        const ext = path.extname(file).toLowerCase();
        res.writeHead(200, {
            'Content-Type': MIME[ext] || 'application/octet-stream',
            'Cache-Control': 'public, max-age=3600',
        });
        fs.createReadStream(file).pipe(res);
        return;
    }

    // Collect request body
    let body = [];
    req.on('data', c => body.push(c));
    req.on('end', () => {
        const postData = Buffer.concat(body);
        try {
            const result = execFileSync(PHP, [INDEX], {
                cwd: __dirname,
                env: {
                    PATH: `/home/z/.local/bin:${process.env.PATH}`,
                    HOME: process.env.HOME,
                    LD_LIBRARY_PATH: '/home/z/.local/php/usr/lib/x86_64-linux-gnu',
                    PHPRC: '/home/z/my-project/hms/php.ini',
                    REQUEST_METHOD: req.method,
                    REQUEST_URI: req.url,
                    QUERY_STRING: parsed.searchParams.toString(),
                    SCRIPT_NAME: '/index.php',
                    SCRIPT_FILENAME: INDEX,
                    DOCUMENT_ROOT: PUBLIC,
                    SERVER_NAME: 'localhost',
                    SERVER_PORT: String(PORT),
                    HTTP_HOST: req.headers.host || `localhost:${PORT}`,
                    CONTENT_TYPE: req.headers['content-type'] || '',
                    CONTENT_LENGTH: String(postData.length),
                    REMOTE_ADDR: '127.0.0.1',
                    REDIRECT_STATUS: '200',
                    GATEWAY_INTERFACE: 'CGI/1.1',
                    SERVER_PROTOCOL: 'HTTP/1.1',
                },
                input: postData,
                timeout: 30000,
                maxBuffer: 50 * 1024 * 1024,
            });
            res.writeHead(200, {'Content-Type':'text/html; charset=UTF-8'});
            res.end(result);
        } catch(e) {
            const output = e.stdout || Buffer.from('Internal Server Error');
            const status = output.toString().includes('404') ? 404 : (e.status || 500);
            res.writeHead(status, {'Content-Type':'text/html; charset=UTF-8'});
            res.end(output);
        }
    });
}).listen(PORT, '0.0.0.0', () => {
    console.log(`HMS server listening on http://0.0.0.0:${PORT}`);
    fs.appendFileSync('/tmp/hms_proxy.log', `Started at ${new Date().toISOString()}\n`);
});
