<?php
echo '<br />';

/* Funcion para debuggear 
es decir, para conocer internamente un variable */
$nombre = "Daniel Fernando Yepez Vélez";
echo "Debuggear var_dump => <br />";
var_dump($nombre);
echo '<hr />';
echo '<br />';

/* Funciones Fecha */
echo "Fecha => ".date('d-m-y');
echo '<br />';
echo "Timestamp => ".time(); //Obtenemos el Timestamp
echo '<hr />';

/* Funciones Matemáticas */
echo '<br />';
echo "Raiz => ".sqrt(10);
echo '<br />';
echo "Random => ".rand(10, 140);
echo '<br />';
echo "PI => ".pi();
echo '<br />';
echo "Redondeo => ".round(8.77999, 2);
echo '<br />';
echo "Tipo Dato => ".gettype($nombre);
echo '<hr />';
echo '<br />';

/* Funciones De Validación */
echo is_string($nombre) ? 'Es string' : 'No es string';
echo '<br />';
echo is_float($nombre) ? 'Es float' : 'No es float';
echo '<br />';
echo isset($nombre) ? 'La variable existe' : 'La variable no existe';
echo '<hr />';
echo '<br />';


/* Funciones De String Limpiar espacios en blanco*/
$frase = '         Espacios Con La Función \'trim\'         ';
echo trim($frase);
echo '<hr />';
echo '<br />';

/* Funcion para eliminar variables o indices de arrays*/
// $year = 2020;
// unset($year);
// var_dump($year);

/* Funcion empty para comprobar si una
variable esta vacia, null o no exista en el
programa */
$texto = null;
echo empty($texto) ? "La variable $texto esta vacia" : "La varibale $texto tiene contenido";
echo '<hr />';
echo '<br />';

/* Longitud de un string */
echo strlen($nombre);
echo '<hr />';
echo '<br />';

/* Encontrar la posicion de un caracter */
echo strpos($nombre, "Y");
echo '<hr />';
echo '<br />';

/* Reemplazar palabras de un string 
palabra original, nueva palabra, string de la Variable */
echo $nombre."<br />";
echo str_replace('Daniel Fernando Yepez Vélez', "DANIEL FERNANDO YEPEZ VÉLEZ", $nombre);
echo '<hr />';
echo '<br />';

/* Convertir a mayúscula y a minúsculas */
$comprobando = 'Organizando y comprobando mayúsculas y minúsculas';
echo strtolower($comprobando).'<br />';
echo strtoupper($comprobando);

?>