<?php
/** Vista base del sistema */
class View
{
  // Template html a mostrar
  protected $template;

  /**
   * Constructor. Ejecuta el método para renderizar el template
   *
   * @param $controller_name string nombre del controlador invocador
   */
  public function __construct($class)
  {
    $this->render($class);
  }

  /**
   * Muestra una vista
   *
   * @param $controller_name string nombre del controlador invocador
   */
  protected function render($controller_name)
  {
    if(class_exists($controller_name)){
      $html_file_name = str_replace('Controller', '', $controller_name);
      $this->template = $this->getContentTemplate($html_file_name);
      echo $this->template;
    }else{
      throw new Exception("Error No existe $controller_name");
    }
  }

  /**
   * Retorna el contenido del template html si existe
   *
   * @param $html_file_name string nombre del archivo que contiene la vista
   *
   * @return Contenido del template html
   */
  protected function getContentTemplate($html_file_name)
  {
    $html_path = ROOT . '/' . PATH_VIEWS . "$html_file_name/$html_file_name" . '.html';
    if(is_file($html_path)){
      ob_start();
      require($html_path);
      $template = ob_get_contents();
      ob_end_clean();
      return $template;
    }else{
      throw new Exception("Error No existe $html_path");
    }
  }

}