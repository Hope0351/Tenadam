<?php

/**
 * Laravel Router for PHP Built-in Server
 */
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$publicPath = __DIR__ . '/public';
$requestedFile = $publicPath . $uri;

// Serve static files directly with proper MIME types
if ($uri !== '/' && file_exists($requestedFile) && !is_dir($requestedFile)) {
    $ext = pathinfo($requestedFile, PATHINFO_EXTENSION);
    $mimeTypes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'ico' => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'eot' => 'application/vnd.ms-fontobject',
        'map' => 'application/json',
        'json' => 'application/json',
        'webp' => 'image/webp',
        'webm' => 'video/webm',
        'mp4' => 'video/mp4',
        'mp3' => 'audio/mpeg',
        'pdf' => 'application/pdf',
    ];
    
    $mime = $mimeTypes[$ext] ?? 'application/octet-stream';
    header('Content-Type: ' . $mime);
    header('Content-Length: ' . filesize($requestedFile));
    header('Cache-Control: public, max-age=3600');
    readfile($requestedFile);
    return true;
}

// Route everything else to index.php
require_once $publicPath . '/index.php';