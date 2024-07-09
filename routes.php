<?php 

$router->get('/', "HomeController@index");
$router->get('/blog', 'BlogController@index');;
$router->get('/blog/create', 'BlogController@create');
$router->get('/blog/edit/{id}', 'BlogController@edit');
$router->get('/blog/{id}', 'BlogController@show');
$router->post('/blog', 'BlogController@store');
$router->put('/blog/{id}', 'BlogController@update');
$router->delete('/blog/{id}', 'BlogController@destroy');