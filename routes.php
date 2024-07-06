<?php 

$router->get('/', "HomeController@index");
$router->get('/blog', 'BlogController@index');

// $router->get('/', 'controllers/home.php');
// $router->get('/blog', 'controllers/blog/index.php');
// $router->get('/blog/create', 'controllers/blog/create.php');
// $router->get('/post', 'controllers/blog/show.php');


