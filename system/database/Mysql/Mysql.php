<?php
/** Administra la conexion a base de datos Mysql */
class Mysql extends Mysqli
{
  public function __construct()
  {
    parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $this->setCharset();
  }

  public function setCharset()
  {
    $this->set_charset(DB_CHARSET);
  }
}