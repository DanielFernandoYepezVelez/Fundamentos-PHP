<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a web application with images in the server">
    <meta name="keywords" content="HTML5, PHP, IMAGES, FILE, POST">
    <meta name="author" content="Daniel Fernando Yepez Velez">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Images Server</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <section>
        <h1>Upload Files With PHP</h1>
        <form action="./uploadImg.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" id="#">
            <input type="submit" value="Enviar">
        </form>
    </section>

    <h1>Image Lists</h1>
    <?php

    $openDirectory = opendir('./img/');

    if ($openDirectory) :
        while (($readImage = readdir($openDirectory)) !== false) :
            if ($readImage != '.' && $readImage !== '..') :
                echo "<img src='./img/$readImage' width='200'/><br />";
            endif;
        endwhile;
    endif;
    ?>

</body>

</html>