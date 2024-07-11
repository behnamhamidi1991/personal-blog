<?php 

require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;
use Framework\Session;

Session::start();

require '../helpers.php';

inspectAndDie(session_status());

// Instantiate the router
$router = new Framework\Router();

// Get the routes
$routes = require basePath('routes.php');


// Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
$router->route($uri);