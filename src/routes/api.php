<?php

use Bramus\Router\Router;
use Pipeg\ApiDepartamentosMunicipios\app\Controllers\MunicipiosController;
use Pipeg\ApiDepartamentosMunicipios\app\Controllers\DepartamentosController;

$router = new Router();


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../config');
$dotenv->load();



$router->get('/', function() {
    echo 'Hola, mundo!';
});

$router->get('/departamentos', function() {
    $departamentos = new DepartamentosController();
    echo $departamentos->get_all();
});

$router->get('/departamentos/{name}', function($name) {
    $departamentos = new DepartamentosController();
    echo $departamentos->get_by_name($name);
});

$router->get('/departamentos/municipios/{name}', function($name) {
    $municipios = new MunicipiosController();
    echo $municipios->get_by_departament($name);
});




$router->run();

?>