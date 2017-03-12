<?php
/**
* Carga las clases dentro de system/core en tiempo de ejecución
*/
spl_autoload_register(function ($class) {
  if(is_file("system/core/$class.php"))
    require "system/core/$class.php";
  elseif (is_file("system/database/$class/$class.php")) {
    require "system/database/$class/$class.php";
  }
});

// ---------------------------------

/**
* Carga los helpers
*/
load_helpers();