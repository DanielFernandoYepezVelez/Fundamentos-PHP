<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Daniel Fernando Yepez Vélez">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Imprimir Por Pantalla</title>
</head>
<body>

  <h1>Mas <?php echo 'Implementando PHP en todo el código' ?> ter en PHP</h1>

  <!-- Esto es como tener un echo directamente-->
  <?="Bienvenidos al curso más grande de PHP"?>

  <?php
    echo '<h3>Listado De Video Juegos</h3>';
    echo '<ul>'
          .'<li>GTA</li>'
          // Comentario de un sola linea igual que en los demás lenguajes
          .'<li>Fifa</li>'
          /* Esto es un comentario en bloque implementado en PHP */
          .'<li>Mario Bros</li>'
          .'<li>Contra</li>'
         .'</ul>';
    echo '<p>Esta Es Toda La'.' - '.'Lista De Video Juegos</p>';
  ?>
</body>
</html>