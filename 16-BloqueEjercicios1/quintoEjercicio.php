<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])) {

  $primerNumero = $_GET['numero1'];
  $segundoNumero = $_GET['numero2'];

  if($primerNumero < $segundoNumero) {

    for($i = ($primerNumero+1); $i < $segundoNumero; $i++) {
      echo "<h1>$i</h1>";
    }

  } else {
    echo "El primer numero debe ser menor que el segundo numero recogidos por la url";
  }

} else {
  echo 'Debe pasar los números como parametros Y/O argumentos';
}

?>