<?php 
/**
* Constantes de configuración general
*/
require_once 'system/config.php';

/**
* Funciones útiles para código dentro de core
*/
require_once 'system/core/functions.php';

/**
* Autoload y helpers necesarios
*/
require_once 'system/core/init.php';

$router = new Router();

// Valida que el controlador exista, sino retorna el controlador 'Error'
$controllerName = validar($router->getController());

// Incluyo el archivo Controller obtenido de router
require PATH_CONTROLLERS . "{$controllerName}/{$controllerName}Controller.php";

// Concateno palabra Controller al final para instanciarlo
$controllerName .= 'Controller';

$controller = new $controllerName();

// Obtengo el método obtenido de router
$method = $router->getMethod();

// Ejecuto el método obtenido
$controller->$method();