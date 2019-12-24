<?php

$variableTipoArray = [];
$variableTipoString = "";
$variableTipoInt = 12;
$variableTipoBoolean = true;

echo gettype($variableTipoArray)."\n";
echo gettype($variableTipoString)."\n";
echo gettype($variableTipoInt)."\n";
echo gettype($variableTipoBoolean)."\n\n";

if (is_array($variableTipoArray)){
  echo "<p>SOY UNA VARIABLE DE TIPO ARRAY</p>";
}
if (is_string($variableTipoString)) {
  echo "<p>SOY UNA VARIABLE DE TIPO STRING</p>";
}
if (is_int($variableTipoInt)) {
  echo "<p>SOY UNA VARIABLE DE TIPO INT</p>";
}
if (is_bool($variableTipoBoolean)) {
  echo "<p>SOY UNA VARIABLE DE TIPO BOOLEANO</p>";
}

?>