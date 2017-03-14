<?php 
/** Controlador base del sistema */
class Controller
{
  /** Objeto de la clase View */
  private $view;
  
  /**
  * Ejecuta la vista según el nombre del controlador hijo y parámetros
  *
  * @param $controller_name nombre del controlador hijo
  * @param $params parámetros que envía el controlador hijo para ser mostrarlos
  */
  public function view($controller_name = '', $params = array())
  {
    $this->view = new View($controller_name, $params);
  }

}