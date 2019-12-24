<?php

/* Ciclo WHILE */
$numero = 0;

while($numero <= 10) {
  echo '<p>'.$numero.'</p>';
  $numero++;
}
echo '<hr />';

// Ejemplo ciclo WHILE
// Aplicando CASTEO DE DATOS
$numero = (int) $_GET['numero'];

if(isset($numero)){
  echo "NUMERO GET $numero".'<br />';
} else {
  echo $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while ($contador <= 10) {
  echo "$numero x $contador = ".($numero * $contador).'<br />';
  $contador++;
}
echo '<hr />';
/* -------------------------------------------------------------------- */

/* Ejemplo ciclo DO-WHILE */
$age = 18;
$contador = 1;

do {

  echo 'Tienes acceso a la disco y al local #'.$contador.'<br />';
  $contador++;

} while($age >= 18 && $contador <= 10);
echo '<hr />';
/* -------------------------------------------------------------------- */

/* Ejemplos con el ciclo FOR */
$acumuladorSuma = 0;

for($i = 0; $i <= 5; $i++) {  

  echo $acumuladorSuma += $i;
  echo '<br />';

  if($acumuladorSuma === 10) {
    echo "Se Aplico El Concepto Del Break<br />";
    break;
  }
}

echo 'Acumulador Total: '.$acumuladorSuma;

?>