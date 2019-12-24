<?php
require_once('./funcionesPrimerEjercicio.php');

$numerosNaturales = [8, 1, 7, 2, 6, 3, 5, 4];

echo '<hr />';
/* Recorrer y Mostrarlo */
echo mostrarArray($numerosNaturales);

echo '<hr />';
/* Ordenarlo y Mostrarlo */
sort($numerosNaturales);
echo mostrarArray($numerosNaturales);

echo '<hr />';
/* Longitud y Mostrarla */
echo count($numerosNaturales);

echo '<hr />';
/* Buscar y Mostrar lo encontrado */
$indice = array_search(7, $numerosNaturales);
echo "INDICE: $indice <br />";
echo "VALOR ENCONTRADO $numerosNaturales[$indice]";

?>