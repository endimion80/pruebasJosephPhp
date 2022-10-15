<?php

// Operadores aritméticos

$numero1 = 55;
$numero2 = 33;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
echo 'División: '.($numero1/$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2).'<br/>';

// Operadores incremento y decremento

$year = 2022;

// Incremento
$year++;

// Pre-incremento
// $year = 1 + $year
++$year;

// Decremento
$year--;

// Pre-decremento
// $year = 1 - $year
--$year;

echo $year.'<br>';

//Operadores de asignación
$edad = 51;

echo $edad.'<br>';

// $edad = $edad + 1;
echo ($edad+=1);

?>
