<?php

use Bramus\Router\Router;
use Pipeg\ApiDepartamentosMunicipios\app\Models\Departamentos;


$router = new Router();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../config');
$dotenv->load();



$router->get('/', function() {
    echo 'Hola, mundo!';
});

$router->get('/departamentos', function() {

});

$router->get('/departamentos/{name}', function($name) {
});




$router->run();

?>