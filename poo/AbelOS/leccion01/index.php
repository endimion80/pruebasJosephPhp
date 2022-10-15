<?php

    require_once ("classOperacion.php"); //Tambien se puede usar Include, pero este no detiene el proceso en caso de error.

    //Objetos
    $operacion1 = new Operacion(10,2);
    $operacion2 = new Operacion(100,3);

    $totalSuma = $operacion1->getSuma();
    echo "Total Suma: ".$totalSuma;
    echo "<br>";

    $totalResta = $operacion1->getResta();
    echo "Total Resta: ".$totalResta;
    echo "<br>";

    $totalMulti = $operacion1->getMultiplicacion();
    echo "Total Multiplicación: ".$totalMulti;
    echo "<br>";

    $totalDiv = $operacion1->getDivicion();
    echo "Total Division: ".$totalDiv;
    echo "<br><br>";

    $totalSuma = $operacion2->getSuma();
    echo "Total Suma: ".$totalSuma;
    echo "<br>";

    $totalResta = $operacion2->getResta();
    echo "Total Resta: ".$totalResta;
    echo "<br>";

    $totalMulti = $operacion2->getMultiplicacion();
    echo "Total Multiplicación: ".$totalMulti;
    echo "<br>";

    $totalDiv = $operacion2->getDivicion();
    echo "Total Division: ".$totalDiv;
    
?>