<?php
/** Modelo de Home */
class HomeModel extends Model
{
  /**
  * Constructor. Inicializa con una conexión a Mysql con el constructor padre.
  */
  public function __construct()
  {
    parent::__construct();
  }

  public function getListas()
  {
    $sql = "SELECT * FROM listas_reproduccion";
    $result = $this->db->query($sql);
    while($row = $result->fetch_array(MYSQLI_ASSOC))
    {
      $listas[$row['id']] = $row['nombre'];
    }
    return $listas;
  }

  public function saveUser($name, $email)
  {
    $sql = "INSERT INTO `usuarios`(`nombre`, `correo`) VALUES ('$name', '$email')";
    $result = $this->db->query($sql);
    return $this->db->affected_rows;
  }

}