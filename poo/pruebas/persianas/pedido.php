<?php

    require_once ("classVeneciana.php"); //Requerimos la(s) clase(s)
    require_once ("classEstor.php");
    require_once ("classVertical.php"); //parte nueva clase vertical

    //Creamos los objetos
    $objVeneciana = new Veneciana("Veneciana", "50mm", "Azul", 1.50, 1.80, "Aluminio", 8); //Instanciamos la(s) clase(s) y le "seteamos" o asignamos los datos
    $objVeneciana->setMandos("Derecha");
    $objVeneciana->setSoportes(3);

    echo $objVeneciana->getDatosPersiana();
    echo "Mandos: ".$objVeneciana->getMandos()."<br>";
    echo "Soportes: ".$objVeneciana->getSoportes();
        
    $objEstor = new Estor("Estor", "Screen", "Beige", 1.10, 2.15, "Fibra de vidrio", 3);
    $objEstor->setGrupo(4);
    $objEstor->setReferencia(4001);

    echo $objEstor->getDatosPersiana();
    echo "Grupo: ".$objEstor->getGrupo()."<br>";
    echo "Referencia: ".$objEstor->getReferencia();

    $objVertical = new Vertical("Vertical", "Line", "Pirate Dark", 3.55, 2.85, "Tejido X", 5);
    $objVertical->setGrupo("Line127");
    $objVertical->setReferencia(820);

    echo $objVertical->getDatosPersiana();
    echo "Grupo Vert: ".$objVertical->getGrupo()."<br>";
    echo "Ref. Vert: ".$objVertical->getReferencia();


?>