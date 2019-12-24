<?php

/* VARIABLES SUPERGLOBALES =>
Son Variables que estan disponibles
en todo un programa creado con PHP */

/* Variables Del SERVIDOR(Para obtener información de un SERVIDOR) */
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
echo '</h1>'.'<br />';

echo '<h1>';
echo $_SERVER['SERVER_NAME'];
echo '</h1>'.'<br />';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h1>'.'<br />';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h1>'.'<br />';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR']; //Servidor Remote
echo '</h1>'.'<br />';

?>