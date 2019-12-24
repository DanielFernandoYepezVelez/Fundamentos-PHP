<?php

function nombres($nombres) {
  $resultado =  "EL NOMBRE ES: $nombres ";
  return $resultado;
}
// echo nombres('Daniel Fernando');

function apellidos($apellidos) {
  $resultado = "LOS APELLIDOS SON: $apellidos ";
  return $resultado;
}
// echo apellidos('Yepez Vélez');

function nombreCompleto($nombreCompleto, $apellidosCompletos) {
  $resultadoFinal = nombres($nombreCompleto) . apellidos($apellidosCompletos);
  return $resultadoFinal;
}
echo nombreCompleto("Daniel Fernando \"COMPLETO\"","Yepez Vélez \"COMPLETO\"");

?>