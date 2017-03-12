<?php 
/**
* Carga los helpers existentes de acuerdo a su ruta
*/
function load_helpers()
{
  $helpers = scandir(PATH_HELPERS);
  foreach ($helpers as $helper) {
    if (is_file(PATH_HELPERS . $helper)) {
      require PATH_HELPERS . '/' . $helper;
    }
  }
}

/**
* Carga el controller dado
*
* @param: string $controller el nombre del controlador
*
*/
function validar($controller)
{
  if(file_exists(PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php")) 
    return $controller;
  return 'Error';
}