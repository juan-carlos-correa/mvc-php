<?php 
/** Controlador base del sistema */
class Controller
{
  /** Template html a mostrar */
  protected $template;

  /** Objeto de la clase View */
  private $view;
  
  /**
  * Constructor. Ejecuta la vista según el nombre del controlador hijo
  */
  public function __construct($class = '')
  {
    $this->view = new View($class);
  }

}