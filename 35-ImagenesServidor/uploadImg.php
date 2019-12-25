<?php

/* $image va a obtener todas las propiedades
de la variable super Global $_FILES */

$image = $_FILES['image'];
$name = $image['name'];
$mimetype = $image['type'];

if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {

  if (!is_dir('img')) {
    mkdir('img', 0777);
  }

  /* Función para tomar el archivo guardado en una
  ruta temporal y asignarle el destino más conveniente */
  move_uploaded_file($image['tmp_name'], "./img/.$name");

  header("Refresh: 3; URL=index.php");
  echo "<h1>Uploaded Image</h1>";
} else {
  header("Refresh: 3; URL=index.php");
  echo "<h1>Sube una imagen con un formato Correcto</h1>";
}
