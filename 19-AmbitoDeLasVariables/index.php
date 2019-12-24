<?php

/* El ambito de la variables se pierde
cuando se hace un return de esa variable
por que eso me permite el return,
sacar las variables de su ambito natural
y utilizarlas en cualquier lugar del
programa */
echo "<br />";
$phrase = "Ni los genios son tan genios, ni los mediocres tan mediocres";
echo $phrase;

function getPhrase() {
  global $phrase; //Para que php sepa que esta es una variable global que voy a utilizar dentro de la function getPhrase.
  $year = 2019;

  return "<h1>$phrase $year</h1>";
}
echo getPhrase();

?>