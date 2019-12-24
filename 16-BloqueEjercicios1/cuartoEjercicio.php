<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])) {

  $numero1 = $_GET['numero1'];
  $numero2 = $_GET['numero2'];

  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $producto = $numero1 * $numero2;
  $modulo = $numero1 % $numero2;

  if($numero1 >= $numero2){
    $division = $numero1 / $numero2;
  } else {
    $division = 'No se puede dividir por cero(0)';
  }

  echo "SUMA => $suma";
  echo "\nRESTA => $resta";
  echo "\nPRODUCTO => $producto";
  echo "\nDIVISIÓN => $division";
  echo "\nMÓDULO => $modulo";
 
} else {
  echo "Debe pasar los números como Parametros Y/O Argumentos";
}

?>