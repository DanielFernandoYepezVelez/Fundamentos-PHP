<?php

/* Operadores de COMPARACIÓN para las condiciones en PHP => 
== igual sin el mismo tipo de dato
=== identico en tipo de dato
!= distinto o diferente
<> distinto o diferente
!== distinto o diferentes en incluso el tipo de dato
< menor que
<= menor o igual que
>= mayor o igual que
*/

/* CONDICIONALES */
$color = 'rojo';
if($color === 'rojo') {
  echo 'El color es ROJO';  
} else {
  echo 'El color NO es ROJO';
}

echo '<br />';

$year = 2019;
if($year === 2019) {
  echo "Estamos en el año $year";
} else {
  echo "No estamos en el año $year";
}

echo '<br />';

$year = 2018;
if($year < 2019) {
  echo "El año es menor a 2019";
} else {
  echo "El año es mayor a 2019";
}

echo '<br />';

$year = 2018;
if($year !== 2019) {
  echo "El año es diferente a 2019";
} else {
  echo "El año es 2019";
}

/* CONDICIONALES ANIDADOS */
echo '<br />';
echo '<br />';
$day = 7;

if($day === 1) {
  echo "Es Lunes";
} else if($day === 2) {
  echo "Es Martes";
} else if($day === 3) {
  echo "Es Miercoles";
} else if($day === 4) {
  echo "Es Jueves";
} else if($day === 5) {
  echo "Es Viernes";
} else if($day === 6) {
  echo "Es Sabado";
} else if($day === 7) {
  echo "Es Domingo";
}

/* CONDICIONALES CON OPERADORES LÓGICOS-RELACIONALES */
echo '<br />';
echo '<br />';

$age = 18;
$ageOld = 64;
$OficialAge = 20;

if(($OficialAge >= $age) && ($OficialAge <= $ageOld)) {
  echo "Esta en edad de Trabajar";
} else {
  echo 'NO esta en edad de Trabajar';
}

echo '<br />';
echo '<br />';
$country = 'England';

if($country === 'Colombia' || $country == 'Mexico' || $country === 'Espana') {
  echo 'En Este Pais Se Habla Español';
} else {
  echo 'En Este Pais No Se Habla Español';
}

?>