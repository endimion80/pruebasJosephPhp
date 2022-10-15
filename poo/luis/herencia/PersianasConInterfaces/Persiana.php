<?php

    require_once ("ClassPersiana2.php");

        $objPersiana = new Persiana2("Veneciana", "Aluminio", 710);
        echo $objPersiana->getDatosPersiana();
        echo $objPersiana->medidas(1.55, 1.25);
        echo "<br>";

        $objPersiana2 = new Persiana2("Stor", "PVC", 101);
        echo $objPersiana2->getDatosPersiana();
        echo "<br>";
        
        $objPersiana3 = new Persiana2("Vertical", "Screen", 01);
        echo $objPersiana3->getDatosPersiana();

?>