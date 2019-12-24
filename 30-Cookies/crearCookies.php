<?php

/* COOKIES => 
Aqui la informacion, se guarda
tanto en el navegador del usuario
como en el servidor, para rastrear
los gustos del usuario dentro del
aplicativo y que acciones realiza
en la misma. Esto es muy inseguro
porque se guarda en unos ficheros
de cookies que se encuentran del
lado del cliente, es decir, en el
navegador y dichas cookies de dichos
ficheros se envian al servidor, para
realizar diferentes funcionalidades
o acciones.
*/

/* Crear Cookie */
// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

/* Cookies Basica */
setcookie("micookie", "valor de mi cookie");

/* Cookie Con Expiración DE UN AÑO*/
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60 * 60 * 24 * 3565));

?>

<a href="verCookies.php">Ver Galletas O Cookies CREADAS</a>