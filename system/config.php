<?php 
/* Valores de la URI **/
define('SERVER', $_SERVER['SERVER_NAME']);

define('URI', $_SERVER['REQUEST_URI']);

define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

// ---------------------------------

/* Valores de rutas **/
define('ROOT', $_SERVER['DOCUMENT_ROOT']);

define('PATH_VIEWS', 'mvc/app/views/');

define('PATH_CONTROLLERS', 'app/controllers/');

define('PATH_HELPERS', 'system/helpers/');

// ---------------------------------

/* Valores de rutas de Core**/

define('CORE', 'system/core/');

define('DB', 'system/database/');

// ---------------------------------

/* Valores de la base de datos **/
define('DB_HOST', 'localhost');

define('DB_USER', 'root');

define('DB_PASS', '');

define('DB_NAME', 'tutoriales');

define('DB_CHARSET', 'utf8');