<?php 
/**
* 
*/
class Model
{
  private $db;

  public function __construct()
  {
    $this->db = new Mysql();
  }
}