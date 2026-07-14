const http = require('http');
const fs = require('fs');
const path = require('path');
const { execSync, spawn } = require('child_process');

const PORT = 8000;
const PUBLIC_DIR = path.join(__dirname, 'public');
const PHP_INI = '/home/z/my-project/hms/php.ini';
const PHP_BIN = '/home/z/.local/php/usr/bin/php8.4';
const LD_PATH = '/home/z/.local/php/usr/lib/x86_64-linux-gnu';

const MIME_TYPES = {
    '.css': 'text/css', '.js': 'application/javascript', '.png': 'image/png',
    '.jpg': 'image/jpeg', '.jpeg': 'image/jpeg', '.gif': 'image/gif',
    '.svg': 'image/svg+xml', '.ico': 'image/x-icon', '.woff': 'font/woff',
    '.woff2': 'font/woff2', '.ttf': 'font/ttf', '.eot': 'application/vnd.ms-fontobject',
    '.json': 'application/json', '.pdf': 'application/pdf',
    '.webp': 'image/webp', '.mp4': 'video/mp4', '.webm': 'video/webm',
};

const server = http.createServer((req, res) => {
    const uri = decodeURIComponent(req.url.split('?')[0]);
    const filePath = path.join(PUBLIC_DIR, uri);

    // Try to serve static file
    if (uri !== '/' && fs.existsSync(filePath) && fs.statSync(filePath).isFile()) {
        const ext = path.extname(filePath).toLowerCase();
        res.writeHead(200, { 'Content-Type': MIME_TYPES[ext] || 'application/octet-stream' });
        fs.createReadStream(filePath).pipe(res);
        return;
    }

    // Route to PHP
    const phpRouter = path.join(__dirname, 'server.php');
    const env = {
        ...process.env,
        PATH: `/home/z/.local/bin:${process.env.PATH}`,
        LD_LIBRARY_PATH: LD_PATH,
        PHPRC: PHP_INI,
    };

    // Use CGI approach - pipe request to php-cgi
    const php = spawn(PHP_BIN, [phpRouter], { env, stdio: ['pipe', 'pipe', 'pipe'] });

    // Write CGI headers
    const body = [];
    req.on('data', chunk => body.push(chunk));
    req.on('end', () => {
        // Set up PHP CGI environment
        php.stdin.write(
            `REQUEST_METHOD=${req.method}\n` +
            `REQUEST_URI=${req.url}\n` +
            `SCRIPT_NAME=/index.php\n` +
            `SCRIPT_FILENAME=${path.join(PUBLIC_DIR, 'index.php')}\n` +
            `DOCUMENT_ROOT=${PUBLIC_DIR}\n` +
            `SERVER_NAME=localhost\n` +
            `SERVER_PORT=${PORT}\n` +
            `HTTP_HOST=${req.headers.host || 'localhost'}\n` +
            `CONTENT_TYPE=${req.headers['content-type'] || ''}\n` +
            `CONTENT_LENGTH=${body.length}\n` +
            `REMOTE_ADDR=127.0.0.1\n` +
            `\n`
        );
        php.stdin.write(Buffer.concat(body));
        php.stdin.end();
    });

    let output = Buffer.alloc(0);
    let headersParsed = false;

    php.stdout.on('data', (chunk) => {
        if (!headersParsed) {
            output = Buffer.concat([output, chunk]);
            const headerEnd = output.indexOf('\r\n\r\n');
            if (headerEnd !== -1) {
                headersParsed = true;
                const headerStr = output.slice(0, headerEnd).toString();
                const bodyChunk = output.slice(headerEnd + 4);
                
                const headers = headerStr.split('\r\n');
                const statusLine = headers[0];
                const statusCode = parseInt(statusLine.match(/\d{3}/)?.[0] || '200');
                
                res.writeHead(statusCode, {
                    'Content-Type': 'text/html; charset=UTF-8',
                    'X-Powered-By': 'PHP/8.4',
                });
                if (bodyChunk.length > 0) res.write(bodyChunk);
            }
        } else {
            res.write(chunk);
        }
    });

    php.stderr.on('data', (data) => {
        fs.appendFileSync('/tmp/hms_node_errors.log', data.toString());
    });

    php.on('close', (code) => {
        if (!headersParsed) {
            res.writeHead(200, { 'Content-Type': 'text/html; charset=UTF-8' });
            res.end(output.toString());
        } else {
            res.end();
        }
    });

    req.on('close', () => {
        if (!php.exitCode) php.kill();
    });
});

server.listen(PORT, '0.0.0.0', () => {
    console.log(`Tenadam Node server running on http://0.0.0.0:${PORT}`);
    fs.appendFileSync('/tmp/hms_node_errors.log', `Server started at ${new Date().toISOString()}\n`);
});
