<?php
/**
* Carga las clases dentro de system/core en tiempo de ejecución
*/
spl_autoload_register(function ($class) {
  require "system/core/$class.php";
});

// ---------------------------------

/**
* Carga los helpers
*/
load_helpers();