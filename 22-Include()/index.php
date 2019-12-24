<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php include('./cabecera.php'); ?>
    <!-- <?php //include_once('./cabecera.php'); ?> -->
    <!-- la diferencia entre include() e include_once() 
     es que el primero me deja incluir el archivo n veces y
     el segundo solo me permite una vez -->

    <!-- Contenido -->
    <div>
        <h2>Esta es la pagina de Inicio</h2>
        <p>Texto de prueba de la página de inicio</p>
    </div>

    <?php include("./footer.php");    ?>
    <!-- <?php //include_once('./cabecera.php'); ?> -->
    <!-- la diferencia entre include() e include_once() 
     es que el primero me deja incluir el archivo n veces y
     el segundo solo me permite una vez -->

</body>

</html>