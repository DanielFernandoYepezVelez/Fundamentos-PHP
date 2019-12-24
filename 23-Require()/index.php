<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php require('./cabecera.php'); ?>
    <!-- <?php //require_once('./cabecera.php'); ?> -->
    <!-- la diferencia entre require() e require_once() 
     es que el primero me deja requerir el archivo N veces y
     el segundo solo me permite una vez -->

    <!-- Contenido -->
    <div>
        <h2>Esta es la pagina de Inicio</h2>
        <p>Texto de prueba de la página de inicio</p>
    </div>

    <?php require("./footer.php");    ?>
    <!-- <?php //require_once('./cabecera.php'); ?> -->
    <!-- la diferencia entre require() e require_once() 
     es que el primero me deja requerir el archivo N veces y
     el segundo solo me permite una vez -->

</body>

</html>