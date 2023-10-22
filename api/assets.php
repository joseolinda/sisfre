<?php
// File: api/assets.php
// Purpose: serve assets from public folder
$file = $_SERVER['REQUEST_URI'];

echo require __DIR__ . '/../public' . $file;