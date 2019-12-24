<?php

/* Arrays Asociativos */
$personas = Array(
  "nombre" => 'Daniel Fernando',
  "apellidos" => 'Yepez Vélez',
  "web" => 'danielfernando.com',
  "genero" => 'M'
);
var_dump($personas);

echo "<br />";
echo "Nombre: ".$personas['nombre']."<br />";
echo "Apellidos: ".$personas['apellidos']."<br />";
echo "WebSite: ".$personas['web']."<br />";
echo "Genre: ".$personas['genero']."<br />";

?>