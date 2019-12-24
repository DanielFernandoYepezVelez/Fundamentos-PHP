<?php

$vacia = "";

if(empty($vacia)) {  
  $vacia = "rellenando la variable que esta vacía";
  echo strtoupper("<strong>$vacia</strong>");
} else {
  $vacia = "LA VARIABLE NO ESTA VACÍA";
  echo strtolower($vacia);
}

?>