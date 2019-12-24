<?php

/* Función mostrar ARRAY*/
function mostrarArray($arrayNumeros) {
  $concateno_numeros_array = "";

  foreach($arrayNumeros as $numero){
    $concateno_numeros_array .= $numero."\n";
  }

  return $concateno_numeros_array;
}

?>