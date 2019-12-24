<?php

/* Para eliminar una cookie
se debe utilizar el método unset()
y además debo caducarla */

if(isset($_COOKIE['micookie'])) {
  unset($_COOKIE['micookie']);
  setcookie('micookie', '', time()-100);
}

if(isset($_COOKIE['unyear'])) {
  unset($_COOKIE['unyear']);
  setcookie('unyear', '', time()-100);
}

/* Con el location del header puedo
redireccionar de url */
header('Location:verCookies.php');

?>