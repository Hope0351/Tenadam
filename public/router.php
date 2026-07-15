<?php
/**
 * Custom PHP built-in server router.
 * Serves static files directly, everything else goes to Laravel's index.php
 */
$publicPath = __DIR__;
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Static file serving
if ($uri !== '/' && file_exists($publicPath . $uri) && !is_dir($publicPath . $uri)) {
    $ext = strtolower(pathinfo($uri, PATHINFO_EXTENSION));
    $staticExts = ['css','js','png','jpg','jpeg','gif','svg','ico','woff2','woff','ttf','eot','webp','pdf','mp4','mp3','webm','map','txt','html','xml','otf'];
    if (in_array($ext, $staticExts)) {
        $mimeTypes = [
            'css'=>'text/css','js'=>'application/javascript','png'=>'image/png',
            'jpg'=>'image/jpeg','jpeg'=>'image/jpeg','gif'=>'image/gif',
            'svg'=>'image/svg+xml','ico'=>'image/x-icon','woff2'=>'font/woff2',
            'woff'=>'font/woff','ttf'=>'font/ttf','eot'=>'application/vnd.ms-fontobject',
            'webp'=>'image/webp','pdf'=>'application/pdf','mp4'=>'video/mp4',
            'mp3'=>'audio/mpeg','webm'=>'video/webm','map'=>'application/json',
            'txt'=>'text/plain','html'=>'text/html','xml'=>'application/xml',
            'otf'=>'font/otf',
        ];
        $mime = $mimeTypes[$ext] ?? 'application/octet-stream';
        header('Content-Type: ' . $mime);
        header('Content-Length: ' . filesize($publicPath . $uri));
        readfile($publicPath . $uri);
        return true;
    }
}

// Everything else → Laravel
require $publicPath . '/index.php';
