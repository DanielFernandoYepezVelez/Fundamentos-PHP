<?php

/* Abrir Archivo Con permisos de escritura, lectura */
// $openFile = fopen("fichero.txt", "r");
$openFile = fopen("fichero.txt", "a+");

/* Leer Contenido */
while (!feof($openFile)) {
  $content = fgets($openFile);
  echo "$content\n";
}

/* Escribir Contenido En El Archivo */
fwrite($openFile, "Soy la función que agrega nuevo contenido desde PHP en el archivo .txt");

/* Cerrar Archivo */
$closeFile = fclose($openFile);
