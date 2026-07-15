const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = 8000;
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

let processing = false;
const queue = [];

function drainQueue() {
    if (processing || queue.length === 0) return;
    processing = true;
    const item = queue.shift();
    console.log(`[PHP] Sending ${item.req.method} ${item.req.url} (queue: ${queue.length})`);
    sendToPhp(item);
}

function sendToPhp({req, res, body}) {
    const headers = {...req.headers};
    if (body.length > 0) headers['content-length'] = body.length;
    delete headers['transfer-encoding'];
    
    const proxyReq = http.request({
        hostname: '127.0.0.1', port: 8001, path: req.url,
        method: req.method, headers, timeout: 120000,
    }, (proxyRes) => {
        const h = {...proxyRes.headers};
        if (h['set-cookie']) {
            const cks = Array.isArray(h['set-cookie']) ? h['set-cookie'] : [h['set-cookie']];
            h['set-cookie'] = cks.map(c => c.replace(/Domain=[^;]+;?/gi, ''));
        }
        if (h.location) h.location = h.location.replace(/:8001/g, ':8000');
        res.writeHead(proxyRes.statusCode, h);
        proxyRes.pipe(res);
        console.log(`[PHP] Response ${proxyRes.statusCode} for ${req.url}`);
    });
    
    proxyReq.on('end', () => {
        console.log(`[PHP] End for ${req.url}`);
        processing = false;
        setTimeout(drainQueue, 100);
    });
    proxyReq.on('error', (err) => {
        console.error(`[PHP] Error for ${req.url}:`, err.message);
        if (!res.headersSent) { res.writeHead(502); res.end('502'); }
        processing = false;
        setTimeout(drainQueue, 100);
    });
    proxyReq.on('timeout', () => {
        console.error(`[PHP] Timeout for ${req.url}`);
        proxyReq.destroy();
        if (!res.headersSent) { res.writeHead(504); res.end('504'); }
        processing = false;
        setTimeout(drainQueue, 100);
    });
    
    if (body.length > 0) proxyReq.write(body);
    proxyReq.end();
}

http.createServer((req, res) => {
    try {
        const urlPath = decodeURIComponent(new URL(req.url, 'http://x').pathname);
        const fp = path.join(PUBLIC, urlPath);
        
        if (urlPath !== '/' && fs.existsSync(fp) && fs.statSync(fp).isFile() && !fp.endsWith('.php')) {
            const ext = path.extname(fp).toLowerCase();
            if (MIME[ext]) {
                res.writeHead(200, {'Content-Type': MIME[ext], 'Content-Length': fs.statSync(fp).size});
                fs.createReadStream(fp).pipe(res);
                return;
            }
        }
        
        console.log(`[REQ] ${req.method} ${req.url} → PHP queue (${queue.length})`);
        const chunks = [];
        req.on('data', c => chunks.push(c));
        req.on('end', () => {
            queue.push({req, res, body: Buffer.concat(chunks)});
            drainQueue();
        });
        req.on('error', () => { res.writeHead(400); res.end(); });
    } catch(e) {
        console.error('[ERR]', e.message);
        if (!res.headersSent) { res.writeHead(500); res.end('500'); }
    }
}).listen(PORT, '0.0.0.0', () => console.log(`Tenadam HMS on :${PORT}`));
