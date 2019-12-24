<?php

/* Recibiendo Data por el metodo GET */
// echo '<h1>'.$_GET['name'].'</h1>';
// echo '<h1>'.$_GET['lastName'].'</h1>';
// var_dump($_GET);

/* Recibiendo Data por el metodo POST */
/* No Olvidar cambiar el de GET a POST y viceversa */
echo '<h1>'.$_POST['name'].'</h1>';
echo '<h1>'.$_POST['lastName'].'</h1>';
var_dump($_POST);

?>