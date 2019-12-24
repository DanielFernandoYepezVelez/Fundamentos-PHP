<?php

$tablasMultiplicarTotales = 10;
$multiplicacionInterna = 15;

echo "<table border='1'> <tr>";
  echo "<tr>";
    for($cabecera = 1; $cabecera <= 10; $cabecera++) {
      echo "<td>Tabla del $cabecera</td>";
    }
  echo "</tr>";

  echo "<tr>";
    for($i = 1; $i <= $tablasMultiplicarTotales; $i++) {
      echo "<td>";
        for($j = 1; $j <= $multiplicacionInterna; $j++) {      
          $operacion = $i * $j;
          echo $i.' * '.$j.' = '.$operacion.'<br />';
        }
      echo "</td>";
    }
  echo "</tr>";
  
echo "</table>"

?>