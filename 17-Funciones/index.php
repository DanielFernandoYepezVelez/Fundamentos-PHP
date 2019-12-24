<?php

/* FUNCIONES =>
Conjunto de Instrucciones que se agrupan
bajo el mismo nombre y se puede reutilizar en todo
el programa invocando el nombre de la
función las veces necesarias o requeridas
*/

/* Las funciones siempre deben devolver
un return es la mejor práctica */

/* EJEMPLO #1 */
echo "<br />";
function nombres() {
  $concatenando_nombres = "";

  $concatenando_nombres .= "Daniel #1 <br />";
  $concatenando_nombres .= "Daniel #2 <br />";
  $concatenando_nombres .= "Daniel #3 <br />";
  $concatenando_nombres .= "Daniel #4 <br />";
  $concatenando_nombres .= "<hr />";

  return $concatenando_nombres;
}
echo nombres();
echo nombres();

/* EJEMPLO #2 */
function tabla($numero) {
  echo "<br />";
  echo "<h3>Tabla De Multiplicar Del: $numero</h3>";
  $concatenando_operacion = "";

  for($i = 0; $i <= 10; $i++) {
    $concatenando_operacion .= "$numero * $i = ".($numero * $i).'<br />';
  }

  return $concatenando_operacion;
}

for($i = 1; $i <= 10; $i++) {
  echo tabla($i);
}
echo "<hr />";

/* EJEMPLO #3 */
function calculadora($numero1, $numero2) {
  
  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $producto = $numero1 * $numero2;

  if($numero2 !== 0) {
    $division = $numero1 / $numero2;
    $modulo = $numero1 % $numero2;
  } else {
    $division = 'No es posible dividir por cero(0).';
    $modulo = 'No es posible obtener el residuo de una división por cero(0).';
  }

  /* Cocatenando cadena de caracteres en PHP */
  $cadena_operacion_matematica = "";

  $cadena_operacion_matematica .= "ADICIÓN: $suma <br />";
  $cadena_operacion_matematica .= "SUSTRACCIÓN: $resta <br />";
  $cadena_operacion_matematica .= "PRODUCTO: $producto <br />";
  $cadena_operacion_matematica .= "DIVISIÓN: $division <br />";
  $cadena_operacion_matematica .= "MÓDULO: $modulo <br />";
  $cadena_operacion_matematica .= "<hr />";

  return $cadena_operacion_matematica;
}
echo calculadora(5,15);
echo calculadora(30,67);
echo calculadora(10,22);

?>