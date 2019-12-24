<?php

$cartelera = [
  "ACCION" => array("Accion1", "Accion2", "Accion3"),
  "AVENTURA" => array("Aventura1", "Aventura2", "Aventura3"),
  "DEPORTES" => array("Deporte1", "Deporte2", "Deporte3")
];

/* PARA OBTENER LOS INDICES DE UN ARRAY EN PHP */
$categorias = array_keys($cartelera);

?>

<table border="1">
  <?php require_once('./filasEjercicio5/fila1.php');   ?>
  <?php require_once('./filasEjercicio5/fila2.php');   ?>
  <?php require_once('./filasEjercicio5/fila3.php');   ?>
</table>