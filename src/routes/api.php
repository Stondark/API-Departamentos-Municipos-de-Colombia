<?php

use Bramus\Router\Router;
$router = new Router();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../config');
$dotenv->load();



$router->get('/', function() {
    echo 'Hola, mundo!';
});

$router->get('/saludo/{nombre}', function($nombre) {
    echo 'Hola, ' . $nombre . '!';
});

$router->run();

?>