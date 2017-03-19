<?php 

/**
* Valida un email
*
* @param: string $email el email a validar
* @return bool true o false si es un email válido o no
*/
function validateEmail($email)
{
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}