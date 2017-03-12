<?php 
require_once 'system/core/config.php';
require_once 'system/core/functions.php';
require_once 'system/core/init.php';

$router = new Router();

// Valida que el controlador exista, sino retorna el controlador 'Error'
$controller = validar($router->getController());

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";

$controller .= 'Controller';

new $controller();