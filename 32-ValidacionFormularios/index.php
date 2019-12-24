<?php

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$age = (int) $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$globalValidation = 'Faltan_Valores_En_El_Formulario';

if((isset($name) && !empty($name)) && (isset($lastName) && !empty($lastName)) && (isset($age) && !empty($age)) && (isset($email) && !empty($email)) && (isset($password) && !empty($password))){
  $globalValidation = 'ok';

  /* Válidando El Nombre Del Usuario */
  if(!is_string($name) || preg_match("/[0-9]+/", $name)){
    $validationName = 'Nombre';
  } else {
    $validationName = true;
  }

  /* Válidando Los Apellidos Del Usuario */
  if(!is_string($lastName) || preg_match("/[0-9]+/", $lastName)){
    $validationLastName = 'Apellidos';
  } else {
    $validationLastName = true;
  }

  /* Válidando La Edad Del Usuario */
  if(!is_int($age) || !filter_var($age, FILTER_VALIDATE_INT)){
    $validationAge = 'Edad';
  } else {
    $validationAge = true;
  }

  /* Válidando El Email Del Usuario */
  if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $validationEmail = 'Email';
  } else {
    $validationEmail = true;
  }

  /* Válidando La Password Del Usuario */
  if(empty($password) || strlen($password) < 5){
    $validationPassword = 'Password';
  } else {
    $validationPassword = true;
  }

  /* DEBBUGEANDO LAS CONDICIONALES */
  /* var_dump($_POST);
  var_dump($validation);
  die(); */

} else {
  $globalValidation = 'Faltan_Valores_En_El_Formulario';
}

if($globalValidation !== 'ok' || $validationName === 'Nombre' ||
  $validationLastName === 'Apellidos' || $validationAge === 'Edad' ||
  $validationEmail === 'Email' || $validationPassword === 'Password'){
  header("Location:form.php?globalValidation=$globalValidation&validationName=$validationName&validationLastName=$validationLastName&validationAge=$validationAge&validationEmail=$validationEmail&validationPassword=$validationPassword");
}

?>

<!-- Mostrando Todos Los Datos Si Se Reciben De Forma Exitosa -->
    <!DOCTYPE html>
    <html lang="es" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Daniel Fernando Yepez Vélez">
        <meta name="description" content="Mostrando los datos recibidos desde el formulario">
        <title>Respuesta Exitosa</title>
    </head>

    <body>

      <?php if($globalValidation === 'ok'): ?>
        <?="<p>$name</p>"?>
        <?="<p>$lastName</p>"?>
        <?="<p>$age</p>"?>
        <?="<p>$email</p>"?>
      <?php endif; ?>

    </body>

    </html>