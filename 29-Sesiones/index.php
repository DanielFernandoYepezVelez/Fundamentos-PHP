<?php

/* SESIONES =>
Este concepto hace referencia a la
persistencia de la información de 
autenticación de un usuario en la aplicación 
para no tener que autenticarse cada vez
que navege en la aplicación HASTA
que cierra sesion en la aplicativo
o cierre el navegador.
Son bastante seguras por que se almacenan
en el servidor.

DESVENTAJA(Navegador) =>
La sesión se cierra cuando se cierra
el navegador.

SESIONES QUE SE BORRAN =>
por ejemplo en una carrito de compra
cuando finalice la compra se borra
esa sesión, pero cuando esta navegando
por la web esa sesión persiste.
*/

/* Iniciar la sesión */
session_start();

/* VARIABLE NORMAL */
$variable_normal = "Soy Una Cadena De Texto";

/* VARIABLE SUPER-GLOBAL DE UNA SESSION 
aqui estoy creando un SESSION Y
esta SESSION la voy a poder utilizar
en cualquier página de mi DOMINIO */
$_SESSION['variable_persistente'] = 'HOLA SOY UNA SESSION ACTIVA';

echo $variable_normal."\n";
echo $_SESSION['variable_persistente'];










?>