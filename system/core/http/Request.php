<?php 
/** Administra los métodos HTTP GET, POST, PUT y DELETE */
class Request
{
  /** Método Http */
  public $http_method;

  /** instancia de la clase Get */
  public $get;

  public function __construct()
  {
    $this->get = new Get();
  }

  /**
  * Asocia la uri con el método del controlador a ejecutar
  *
  * @param string $uri Uri a asociar con el método
  * @param string $method Nombre del método a ejecutar
  *
  */
  public function listenRequest()
  {
    $this->http_method = REQUEST_METHOD;
  }
}