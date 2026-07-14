const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = 8000;
const PHP_URL = 'http://127.0.0.1:8001';
const PUBLIC = path.join(__dirname, 'public');

const MIME = {
    '.css':'text/css','.js':'application/javascript','.png':'image/png',
    '.jpg':'image/jpeg','.jpeg':'image/jpeg','.gif':'image/gif',
    '.svg':'image/svg+xml','.ico':'image/x-icon','.woff2':'font/woff2',
    '.woff':'font/woff','.ttf':'font/ttf','.eot':'application/vnd.ms-fontobject',
    '.json':'application/json','.webp':'image/webp','.pdf':'application/pdf',
    '.mp4':'video/mp4','.mp3':'audio/mpeg','.webm':'video/webm',
    '.map':'application/json','.txt':'text/plain','.html':'text/html',
    '.xml':'application/xml','.otf':'font/otf',
};

// Serialize PHP requests
let phpReq = null;

function sendToPhp(req, res) {
    // Queue: wait for current PHP request to finish
    const check = () => {
        if (phpReq) {
            setTimeout(check, 50);
            return;
        }
        phpReq = { done: false };
        
        const proxyReq = http.request(PHP_URL + req.url, {
            method: req.method,
            headers: req.headers,
            timeout: 60000,
        }, (proxyRes) => {
            // Rewrite set-cookie domain
            const h = {...proxyRes.headers};
            if (h['set-cookie']) {
                const cookies = Array.isArray(h['set-cookie']) ? h['set-cookie'] : [h['set-cookie']];
                h['set-cookie'] = cookies.map(c => c.replace(/Domain=[^;]+;?/gi, ''));
            }
            res.writeHead(proxyRes.statusCode, h);
            proxyRes.pipe(res);
        });
        
        proxyReq.on('error', () => {
            if (!res.headersSent) res.writeHead(502, {'Content-Type':'text/html'});
            res.end('<h1>502 PHP Busy</h1>');
            phpReq = null;
        });
        
        proxyReq.on('timeout', () => {
            proxyReq.destroy();
            if (!res.headersSent) res.writeHead(504, {'Content-Type':'text/html'});
            res.end('<h1>504 Timeout</h1>');
            phpReq = null;
        });
        
        req.pipe(proxyReq);
        
        res.on('finish', () => { phpReq = null; });
        res.on('close', () => { phpReq = null; });
    };
    check();
}

http.createServer((req, res) => {
    const urlPath = decodeURIComponent(new URL(req.url, 'x://x').pathname);
    const filePath = path.join(PUBLIC, urlPath);
    
    // Static file?
    if (urlPath !== '/' && fs.existsSync(filePath) && fs.statSync(filePath).isFile() && !filePath.endsWith('.php')) {
        const ext = path.extname(filePath).toLowerCase();
        try {
            res.writeHead(200, {'Content-Type': MIME[ext]||'application/octet-stream', 'Content-Length': fs.statSync(filePath).size});
            fs.createReadStream(filePath).pipe(res);
            return;
        } catch(e) {}
    }
    
    sendToPhp(req, res);
}).listen(PORT, '0.0.0.0', () => console.log(`Tenedam on :${PORT}, PHP at ${PHP_URL}`));
