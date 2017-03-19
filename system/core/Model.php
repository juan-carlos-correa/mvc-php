<?php 
/**
* Modelo del sistema. Inicializa con una conexión a Mysql
*/
class Model
{
  /** 
  * Instancia de la clase Mysql
  */
  protected $db;

  /** 
  * Constructor. Inicializa la conexón a Mysql
  */
  public function __construct()
  {
    $this->db = new Mysql();
  }
}