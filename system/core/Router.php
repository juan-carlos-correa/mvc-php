<?php 
/**
* Identifica la URI y asigna a los valores correspondientes
*/
class Router
{
  public $request;
  protected $controller;
  protected $method;
  protected $id;
  private $uri;

  public function __construct()
  {
    $this->request = new Request();
    $this->setUri();
    $this->setId();
    $this->setMethod();
    $this->setController();
  }

  public function setUri()
  {
    $this->uri = explode('/', SERVER . REQUEST);
  }

  public function setId()
  {
    $this->id = count($this->uri) > 4 ? $this->uri[4] : '';
  }

  public function setMethod()
  {
    $this->method = count($this->uri) > 3 ? $this->uri[3] : 'exec';
  }

  public function setController()
  {
    $this->controller = $this->uri[2] === '' ? 'Home' : $this->uri[2];
  }

  public function getController()
  {
    return $this->controller;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function getId()
  {
    return $this->id;
  }

}