<?php

/* Tipos De Datos Existentes En PHP =>
Entero (int / Integer) 99.
Coma Flotante (float / double) 45.677.
Cadena De Caracteres (string) "H".
Booleano (true / false | 1 / 0).
null (cuando una variable no tiene valor).
Array (Colección de datos).
Objetos (Conjunto De Datos Y Funciones Independientes).
*/

$numeroEntero = 100;
echo gettype($numeroEntero);
echo '<br />';

$numeroComaFlotante = 1.3;
echo gettype($numeroComaFlotante);
echo '<br />';

$str = 'Hola Mundo';
echo gettype($str);
echo '<br />';

$boean = true;
echo gettype($boean);
echo '<br />';

/* Tipo De Dato Null (Muestra El Error) */
$nula;
echo gettype($nula);
echo '<br />';

?>