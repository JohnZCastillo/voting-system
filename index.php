<?php

// Act as a router.
// all incoming request will be sent to this file.

$request = $_SERVER['REQUEST_URI'];

// folder inside htdocs.
// check htaccess.
$base = '/voting-system/';

// reroute request to views.
switch ($request) {
    case $base:
        require __DIR__ . '/views/pages/home.php';
        break;
    case $base . 'auth':
        require __DIR__ . '/views/pages/auth.php';
        break;
    case $base . 'home':
        require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/error.php';
        break;
}
