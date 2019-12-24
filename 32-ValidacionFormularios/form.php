<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Daniel Fernando Yepez Vélez">
    <meta name="description" content="Validando formularios en PHP y en HTML5">
    <title>Validando Formulario</title>
</head>

<body>
    <h1>Validando Formulario en PHP</h1>

    <?php
      if(isset($_GET['globalValidation']) && $_GET['globalValidation'] === 'Faltan_Valores_En_El_Formulario') {
          echo "<h3><strong style='color: red'>Introduce La Información Completa</strong></h3>";
      }
      if(isset($_GET['validationName']) && $_GET['validationName'] === 'Nombre') {
          echo "<h3><strong style='color: red'>Introduce El Nombre Correctamente</strong></h3>";
      }
      if(isset($_GET['validationLastName']) && $_GET['validationLastName'] === 'Apellidos') {
          echo "<h3><strong style='color: red'>Introduce Los Apellidos Correctamente</strong></h3>";
      }
      if(isset($_GET['validationAge']) && $_GET['validationAge'] === 'Edad') {
          echo "<h3><strong style='color: red'>Introduce La Edad Correctamente</strong></h3>";
      }
      if(isset($_GET['validationEmail']) && $_GET['validationEmail'] === 'Email') {
          echo "<h3><strong style='color: red'>Introduce El Correo Eléctronico Correctamente</strong></h3>";
      }
      if(isset($_GET['validationPassword']) && $_GET['validationPassword'] === 'Password') {
          echo "<h3><strong style='color: red'>Introduce La Contraseña Mayor A 5 Caracteres</strong></h3>";
      }
    ?>

    <form action="index.php" method="POST">
        <label for="name">Nombre:</label> <br>
        <input type="text" name="name" id="#" autofocus required pattern="[a-zA-Z ]+"> <br><br>

        <label for="lastName">Apellidos:</label> <br>
        <input type="text" name="lastName" id="#" autofocus required pattern="[a-zA-Z ]+"> <br><br>

        <label for="age">Edad:</label> <br>
        <input type="text" name="age" id="#" autofocus required pattern="[0-9]+"> <br><br>

        <label for="email">Correo Electrónico:</label> <br>
        <input type="text" name="email" id="#" autofocus required> <br><br>

        <label for="password">Contraseña:</label> <br>
        <input type="password" name="password" id="#" autofocus required minlength="5"><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>