<?php

/* Definiendo el ARRAY */
$arrayValores = [];

/* Agregando Valores */
for($i = 1; $i < 11; $i++) {
  array_push($arrayValores, "Elemento #$i")."\n";
}
echo "<br />";

/* Mostrando Los Valores Agregados */
foreach($arrayValores as $valor) {
  echo "<p>$valor</p>";
}

?>