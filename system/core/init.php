<?php
/**
* Carga las clases dentro de system/core en tiempo de ejecución
*/
spl_autoload_register(function ($class) {
  if(is_file(CORE . "$class.php"))
    require CORE . "$class.php";
  elseif (is_file(CORE . "http/$class.php"))
    require(CORE . "http/$class.php");
  elseif (is_file(DB . "$class/$class.php")) {
    require DB . "$class/$class.php";
  }
});

// ---------------------------------

/**
* Carga los helpers
*/
load_helpers();