<?php

$contactos = Array(
  Array(
    'nombre' => 'Daniel Fernando Yepez Vélez',
    'email' => 'danipez.02@gmail.com'
  ),

  Array(
    'nombre' => 'Luisa Fernanda Rodriguez Hincapie',
    'email' => 'luisa.02@gmail.com'
  ),

  Array(
    'nombre' => 'Carlos Mario Saldarriaga Echeverria',
    'email' => 'carlos.02@gmail.com'
  ),
);

echo "<br />".var_dump($contactos);
echo $contactos[0]['nombre'];
echo "<br />".$contactos[0]['email'];

echo "<br />".$contactos[1]['nombre'];
echo "<br />".$contactos[1]['email'];

echo "<br />".$contactos[2]['nombre'];
echo "<br />".$contactos[2]['email'];
echo "<hr />";

echo "<br />";
/* Con este foreach no tengo acceso
o contro al indice pero si a los
arrays asociativos que estan internos
*/
foreach($contactos as $contacto) {
  echo $contacto['nombre']."<br />";
}
echo "<hr />";

?>