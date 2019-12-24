<?php

$cantantes = ['zpac', 'Drake', 'Jennifer Lopez', 'Alfredo'];

/* Ordena Alfabaticamente y numericamente un ARRAY */
sort($cantantes);
var_dump($cantantes);

/* Agregar Elementos al ARRAY */
$cantantes[] = "Natos";
array_push($cantantes, "Waos");
var_dump($cantantes);

/* Elimina el ultimo indice del ARRAY */
array_pop($cantantes);
var_dump($cantantes);

/* Eliminar un indice en concreto */
unset($cantantes[2]);
var_dump($cantantes);

/* Mostrar un elemento aleatorio de un ARRAY */
$indice = array_rand($cantantes);
// echo $indice.'<br />';
echo $cantantes[$indice]."\n\n";

/* Invertir un Array */
$numeros = Array(1,2,3,4,5,6,7,8,9,10);
$inverso = array_reverse($numeros);
var_dump($numeros);
var_dump($inverso);

/* Buscar Dentro De Un Array */
$resultado = array_search('Drake', $cantantes);
var_dump($resultado); //Obtengo el indice

/* Contar numero de elementos De un ARRAY */
echo "Count() => ".count($cantantes)."\n";
echo "Count() => ".count($numeros)."\n";
echo "sizeof() => ".sizeof($numeros)."\n";

?>