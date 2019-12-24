<?php
echo '<br />';

$peliculas = Array('Batman', 'Spiderman', 'Cronos', 'IoT');
// var_dump($peliculas);
$canciones = ['cancion1', 'cancion2', 'cancion3'];
// var_dump($canciones);

echo '<br />';
echo $peliculas[0];
echo '<br />';
echo $canciones[0];
echo '<hr />';

/* Listado de CANCIONES */
for($i = 0; $i < count($canciones); $i++) {
  echo "Canción #".($i+1)." => $canciones[$i] <br />";
}

/* Listado de PELICULAS */
echo '<br />';
for($i = 0; $i < count($peliculas); $i++) {
  echo "Pelicula #".($i+1)." => $peliculas[$i] <br />";
}
echo '<hr />';
echo '<br />';

/* Recorrer con foreach
Este ciclo esta diseñado para recorrer
arrays. La desventaja de estos ciclos es
que no se puede acceder al indice del array.
*/
/* LISTADO DE CANCIONES */
$i = 0;
foreach($canciones as $cancion) {
  echo "Canción #".($i+=1)." => $cancion<br />";
}
echo '<br />';

/* LISTADO DE PELICULAS */
$i = 0;
foreach($peliculas as $pelicula) {
  echo "Pelicula #".($i+=1)." => $pelicula<br />";
}

?>