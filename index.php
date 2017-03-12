<?php 
require_once 'system/config.php';
require_once 'system/core/functions.php';
require_once 'system/core/init.php';

$router = new Router();

// Valida que el controlador exista, sino retorna el controlador 'Error'
$controllerName = validar($router->getController());

require PATH_CONTROLLERS . "{$controllerName}/{$controllerName}Controller.php";

$controllerName .= 'Controller';

$controller = new $controllerName();
$method = $router->getMethod();
$controller->$method();