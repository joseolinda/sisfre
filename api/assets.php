<?php
// File: api/assets.php
// Purpose: serve assets from public folder
$file = $_SERVER['REQUEST_URI'];

// get the file extension
$ext = pathinfo($file, PATHINFO_EXTENSION);

// set mime type based on extension
switch ($ext) {
    case 'css':
        $mime = 'text/css';
        break;
    case 'js':
        $mime = 'text/javascript';
        break;
    case 'png':
        $mime = 'image/png';
        break;
    case 'jpg':
        $mime = 'image/jpeg';
        break;
    case 'gif':
        $mime = 'image/gif';
        break;
    default:
        $mime = 'text/plain';
        break;
}

// set the content type header
header('Content-Type: ' . $mime);

require __DIR__ . '/../public' . $file;