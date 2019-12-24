<?php

/* Variables en PHP */
$primeraVariable = 'Hola Mundo Desde Una Variable';
$numero = 44;
$verdadero = true;
$numero = 77;

echo '<h1>'.$primeraVariable.'</h1>';
echo '<h2>'.$numero.'</h2>';
echo '<h3>'.$verdadero.'</h3>';

$numero = 120;
$verdadero = false;

echo '<h4>'.$numero.'</h4>';
echo '<h5>'.$verdadero.'</h5>'; //No se ve resultado cuando el valor es false, por lo general muestra un 0.

?>