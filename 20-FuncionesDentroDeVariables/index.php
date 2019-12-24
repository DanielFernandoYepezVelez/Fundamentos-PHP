<?php

function buenosDias() {
  return "Hola Buenos Dias";
}

function buenasTardes() {
  return "\nHola Buenas Tardes";
}

function buenasNoches() {
  return "\nHola Buenas Noches";
}

/* Funciones dentro de las Variables */
$dia = "buenosDias";
$tarde = "buenasTardes";
$noche = "buenasNoches";

/* Imprimiendo las variables que almacenan funciones debo aplicar los parentesis */
echo $dia();
echo $tarde();
echo $noche();

?>