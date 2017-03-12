<?php 
/** Controlador Home */
class HomeController extends Controller
{
  /** Constructor. Renderiza el template segun el controlador*/
  public function __construct()
  {
    parent:: __construct(__CLASS__);
  }

  /** Método standard del controlador */
  public function exec()
  {
    echo 'Ejecutando metodo';
  }
}