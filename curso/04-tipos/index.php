<?php

 /*
  * TIPOS DE DATOS:
  * Entero (int / integer) = 99
  * Coma flotante / decimal (float / double) = 5.33
  * Cadenas (string) = "Hola, yo soy un string"
  * Boleano (bool) = true o false
  * null
  * Array (Coleccion de datos)
  * Objetos
  */

$numero = 100;
$decimal = 2.33;
$texto[] = 'hola, que tal';
$verdadero = true; //si ponemos false, no mostraria ningun valor "0"
$nula = null;

echo $numero .gettype($numero) .'<br>';
echo $decimal .gettype($decimal) .'<br>';
echo $texto .gettype($texto) .'<br>';
echo $verdadero .gettype($verdadero) .'<br>';
echo $nula .gettype($nula) .'<br>';

var_dump($texto);