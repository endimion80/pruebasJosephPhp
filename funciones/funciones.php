<?php

/*
a) Una función que reciba cinco números enteros como parámetros y muestre por pantalla el resultado de sumar los cinco números 
(tipo procedimiento, no hay valor devuelto).
*/
    echo "A) ";
        function sumarNumero($a, $b, $c, $d, $e) {
            $suma = $a + $b + $c + $d + $e;
            echo "la suma es $suma";
}
    sumarNumero(3, 1, 9, 2, 7);

/*
b) Una función que reciba cinco números enteros como parámetros y devuelva el resultado de sumar los cinco números 
(tipo función, hay un valor devuelto). Asigna el resultado de una invocación a la función con los números 2, 5, 1, 8, 10 
a una variable de nombre $tmp y muestra por pantalla el valor de la variable.
*/

    echo '<br/>';
    echo "B) ";
        function suma($a, $b, $c, $d, $e) {
            return $a + $b + $c + $d + $e;
}
    $tmp = suma(2, 5, 1, 8, 10);
    echo "La suma de los numeros es: $tmp";

/*
c) Una función que reciba como parámetros el valor del radio de la base y la altura de un cilindro y devuelva el volumen del cilindro, 
teniendo en cuenta que el volumen de un cilindro se calcula como Volumen = númeroPi * radio * radio * Altura 
siendo númeroPi = 3.1416 aproximadamente.
*/

    echo '<br/>';
    echo "C) ";
        function volumen($radio, $altura) {
            return (M_PI * pow($radio, 2) * $altura);
}
    echo "El volumen es: " . volumen($radio = 5, $altura = 8);

//https://www.aprenderaprogramar.com/index.php?option=com_content&view=article&id=573:funciones-php-declaracion-y-llamadas-parametros-tipos-return-ejercicios-ejemplos-resueltos-cu00827b&catid=70&Itemid=193

?>
