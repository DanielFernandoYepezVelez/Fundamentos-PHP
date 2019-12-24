<?php

/* Este operador me permite
omitir un flujo de código 
que no sea el especificado en
el goto o tambien no ejecutar 
las lineas de código hasta
no encontrar la especificación 
del operador GOTO*/

goto ejecuta_aqui;
echo '<h3>Instrucción 1</h3>';
echo '<h3>Instrucción 2</h3>';
echo '<h3>Instrucción 3</h3>';
echo '<h3>Instrucción 4</h3>';

ejecuta_aqui:
  echo '<h1>Me he saltado 4 Instrucciones</h1>';

?>