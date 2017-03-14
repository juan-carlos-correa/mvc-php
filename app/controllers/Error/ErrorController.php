<?php
/** Controlador Error */
class ErrorController extends Controller
{
  /** Constructor. Renderiza el template segun el controlador*/
  public function __construct()
  {
    $this->view(__CLASS__);
  }

  /** Método standard del controlador */
  public function exec()
  {
    echo 'Ejecutando metodo de Error';
  }
}