<?php 
/**
* Identifica la URI y asigna a los valores correspondientes
*/
class Router
{
  public $request;

  /** 
  * Nombre del controlador a ejecutar
  */
  public $controller;

  /** 
  * Nombre del método a ejecutar
  */
  public $method;

  /** 
  * Valor del parámetro enviado por la URI
  */
  public $param;

  /** 
  * URI recibida por el cliente
  */
  private $uri;

  /** 
  * Constructor. Inicializa los atributos de la clase
  */
  public function __construct()
  {
    $this->request = new Request();
    $this->setUri();
    $this->setParam();
    $this->setMethod();
    $this->setController();
  }

  /** 
  * Asigna la URI
  */
  public function setUri()
  {
    $this->uri = explode('/', SERVER . REQUEST);
  }

  /** 
  * Asigna el parámetro
  */
  public function setParam()
  {
    $this->param = count($this->uri) > 4 ? $this->uri[4] : '';
  }

  /** 
  * Asigna el método
  */
  public function setMethod()
  {
    $this->method = count($this->uri) > 3 ? $this->uri[3] : 'exec';
  }

  /** 
  * Asigna el controlador
  */
  public function setController()
  {
    $this->controller = $this->uri[2] === '' ? 'Home' : $this->uri[2];
  }

  /** 
  * Retorna el controlador
  * @return el nombre del controlador a ejecutar
  */
  public function getController()
  {
    return $this->controller;
  }

  /** 
  * Retorna el método
  * @return el nombre del método a ejecutar
  */
  public function getMethod()
  {
    return $this->method;
  }

  /** 
  * Retorna el parámetro
  * @return el nombre del parámetro recibido por la URI
  */
  public function getParam()
  {
    return $this->param;
  }

}