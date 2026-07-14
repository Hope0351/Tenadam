<?php

/**
 * Laravel Router for PHP Built-in Server
 */
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Serve static files
$publicPath = __DIR__ . '/public';
$requestedFile = $publicPath . $uri;

if ($uri !== '/' && file_exists($requestedFile) && !is_dir($requestedFile)) {
    return false; // Let PHP server handle static files
}

// Route everything else to index.php
require_once $publicPath . '/index.php';
