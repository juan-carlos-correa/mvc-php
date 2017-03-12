<?php 
/** Controlador Home */
class HomeController extends Controller
{
  /** Constructor. Renderiza el template segun el controlador */
  public function __construct()
  {
    $values = array("nombre" => 'Juan', 'array' => array(1,2,3,4,5));
    parent:: __construct(__CLASS__, $values);
  }

  /** Método standard del controlador */
  public function exec()
  {
    echo 'Ejecutando metodo';
  }
}