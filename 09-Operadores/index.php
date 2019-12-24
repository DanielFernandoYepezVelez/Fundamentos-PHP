<?php 

/* Operadores Aritméticos */
$numero1 = 55;
$numero2 = 33;

echo 'SUMA => '.($numero1 + $numero2).'<br />';
echo 'RESTA => '.($numero1 - $numero2).'<br />';
echo 'PRODUCTO => '.($numero1 * $numero2).'<br />';
echo 'DIVISIÓN => '.($numero1 / $numero2).'<br />';
echo 'MÓDULO => '.($numero1 % $numero2).'<br />';

/* ---------------------------------------------------------------------------- */
/* Operadores De Incremento O Decremento */
/* Incremento */
$year = 2019;
$year++;
echo '<h1>'.$year.'</h1>';

/* Decremento */
$year = 2019;
$year--;
echo '<h1>'.$year.'</h1>';

/* ---------------------------------------------------------------------------- */
/* Operadores De Asignación */
$edad = 55;
echo 'EDAD ORIGINAL => '.$edad.'<br />';

/* Asignación SUMA */
echo ($edad += 5).'<br />';

/* Asignación RESTA */
echo ($edad -= 5).'<br />';

/* Asignación PRODUCTO */
echo ($edad *= 5).'<br />';

/* Asignación DIVISIÓN */
echo ($edad /= 5).'<br />';

/* Asignación MÓDULO */
echo ($edad %= 5).'<br />';

?>