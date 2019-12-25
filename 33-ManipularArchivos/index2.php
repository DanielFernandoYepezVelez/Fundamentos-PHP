<?php

/* Copiar un Archivo Existente */
copy('fichero.txt', 'fichero_copiado.txt') or die("Error al Copiar el Archivo");

/* Renombrar un Archivo */
rename('fichero_copiado.txt', 'archivo_renombrado.txt');

/* Eliminar un Archivo */
unlink('eliminarArchiv.txt') or die("Error al eliminar el archivo");

/* Comprobar si el archivo existe o no existe */
if (file_exists("fichero.txt")) {
  echo "El archivo existe";
} else {
  echo "El archivo No existe";
}
