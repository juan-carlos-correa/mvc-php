<?php 
require_once ROOT . '/mvc/app/models/Home/HomeModel.php';

/** Controlador Home */
class HomeController extends Controller
{
  /** Objeto de la clase HomeModel */
  private $model;

  /** 
  * Constructor. Renderiza el template segun el controlador y parametros
  * 
  * Los nombres del controlador y la vista deben ser iguales, cada uno con su
  * propio sufijo (HomeController, HomeModel).

  * Puedes enviar parámetros. Los parámetros deben ser en forma de array.
  * La vista tendrá acceso a cada índice del array y lo tomará como una variable.
  */
  public function __construct()
  {
    $values = array("nombre" => 'Juan', 'array' => array(1,2,3,4,5));
    parent:: __construct(__CLASS__, $values);
    $this->model = new HomeModel();
  }

  /** Método standard del controlador. Se ejecuta al cargar el controllador*/
  public function exec()
  {
    echo '</br> Ejecutando metodo homeController</br>';
  }
}