<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config.php';

$router = new \Bramus\Router\Router();

$router->set404(function() {
    echo "Error 404!!!";
});

$router->get('/', '\App\Controller\IndexController@index');
$router->get('/posts/(\d+)/(\w+)/', '\App\Controller\IndexController@index');

$router->run();

?>