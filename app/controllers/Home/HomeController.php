<?php 
require_once ROOT . '/mvc/app/models/Home/HomeModel.php';

/** Controlador Home */
class HomeController extends Controller
{
  /** Objeto de la clase HomeModel */
  private $model;

  /** 
  * Constructor. Inicializa valores entre ellos
  *
  * Puede mostrar la vista e inicializar el modelo, depende del programador
  */
  public function __construct()
  {
    $values = array("nombre" => 'Juan', 'array' => array(1,2,3,4,5));
    $this->view(__CLASS__, $values);
    $this->model = new HomeModel();
  }

  /** Método standard del controlador. Se ejecuta al cargar el controllador*/
  public function exec()
  {
    echo '</br> Ejecutando metodo homeController</br>';
  }
}