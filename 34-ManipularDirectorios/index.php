<?php
echo "<br />";
/*  Crear un Directorio y en simultaneo
comprobar si dicho directorio existe */
if (!is_dir('new-folder')) {
  mkdir('new-folder', 0777) or die('No se puede crear la carpeta');
} else {
  echo 'La carpeta ya existe';
}
echo "<hr />";

/* Recorrer los archivos PHP del Directorio Creado */
if ($openDirectorio = opendir('./new-folder/')) {
  while (false !== ($leerArchivos = readdir($openDirectorio))) {
    if ($leerArchivos !== '.' && $leerArchivos !== '..') {
      echo $leerArchivos . "<br />";
    }
  }
}

/* Eliminar Directorios */
// rmdir('new-folder');
