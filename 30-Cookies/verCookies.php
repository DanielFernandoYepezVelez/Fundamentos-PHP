<?php

/* Para ver el valor de las COOKIES tengo
que usar $_COOKIE que es una variable 
super-global y es un array ASOCIATIVO */

if(isset($_COOKIE['micookie'])) {
  echo "<p>".$_COOKIE['micookie']."</p>";
} else {
  echo "<p>No existe la cookie UNO</p>";
}

if(isset($_COOKIE['unyear'])) {
  echo "<p>".$_COOKIE['unyear']."</p>";
} else {
  echo "<p>No existe la cookie DOS</p>";
}

?>

<a href="crearCookies.php">Crear Galletas o Cookies </a> <br>
<a href="eliminarCookies.php">Eliminar Galletas o Cookies CREADAS </a>