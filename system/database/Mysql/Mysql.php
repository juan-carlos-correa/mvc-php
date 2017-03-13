<?php
/** Administra la conexion a base de datos Mysql */
class Mysql extends Mysqli
{ 
  /**
  * Constructor. Inicializa con una conexión Mysql con constantes de configuración
  */
  public function __construct()
  {
    parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $this->setCharset();
  }

  /**
  * Establece el tipo de codificación según la constante DB_CHARSET
  */
  public function setCharset()
  {
    $this->set_charset(DB_CHARSET);
  }
}