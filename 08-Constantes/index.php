<?php

/* Constantes Valor No Variable */
define('nombre', 'Daniel Fernando Yepez Vélez');
define('otroNombre', 'Yepez Vélez Daniel Fernando');
define('numeroPI', 3.1416);

/* Para Mostrar una Constante muestro el nombre sin el signo de $ */
echo '<h1>'.nombre.'<h1/>'
     .'<br />'
     .'<h1>'.otroNombre.'<h1/><br />';

echo 'Numero PI Con Un Valor CONSTANTE => '.numeroPI;
echo '<br />';

/* Constantes predefinidas en PHP */
echo PHP_OS;
echo '<br />';

echo PHP_VERSION;
echo '<br />';

echo __DIR__;
echo '<br />';

echo __LINE__;
echo '<br />';

echo __FILE__;
echo '<br />'

?>