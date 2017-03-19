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
* Retorna el controller si existe el archivo
*
* @param string $controller el nombre del controlador
* @return el nombre del controlador a ejecutar
*/
function validar($controller)
{
  if(file_exists(PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php")) 
    return $controller;
  return 'Error';
}

/**
* Valida que exista el método de una clase
*
* @param string $class nombre de la clase
* @param string $method nombre del método
*/
function validateMethod($class, $method)
{
  if(!method_exists($class, $method))
    exit("No existe el método $method en $class");
}