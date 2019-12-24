<?php

for($i = 1; $i <= 40; $i++) {
  $cuadrado = ($i * $i);
  echo "Numero Original: $i => $i Al Cuadrado <=> $cuadrado\n";
}
echo "<hr />";
/* -------------------------------------------- */

$i = 1;
while($i <= 40) {
  $cuadrado = ($i * $i);
  echo "Numero Original: $i => $i Al Cuadrado <=> $cuadrado<br/>";
  $i++;
}


?>