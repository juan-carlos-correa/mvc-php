<?php
/**
* 
*/
class Get
{
  public static function exec($uri, $method)
  {
    var_dump(REQUEST_METHOD == 'G' and SERVER . URI == $uri);
    if(REQUEST_METHOD == 'GE' and SERVER . URI == $uri){
      // $method;
      echo 'exec';
    }
  }

}