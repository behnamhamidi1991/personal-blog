<?php 

require '../helpers.php';

$routes = [
    '/' => 'controllers/home.php',
    '/blog' => 'controllers/blog/index.php',
    '/blog/create' => 'controllers/blog/create.php',
    '404' => 'controllers/errors/404.php'
];

$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));
} else {
    require basePath($routes['404']);
}