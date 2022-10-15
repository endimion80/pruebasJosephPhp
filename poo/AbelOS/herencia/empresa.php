<?php

    require_once ("ClassEmpleado.php");
    require_once ("ClassCliente.php");

    $objEmpleado = new Empleado(78978,"Andres Perez",25);
    $objEmpleado->setPuesto("Administrador");

    echo $objEmpleado->getDatosPersonales();
    echo "Puesto: ".$objEmpleado->getPuesto();


    $objCliente = new Cliente(15258,"Sara Borges",20);
    $objCliente->setCredito(1000);

    echo $objCliente->getDatosPersonales();
    echo "Creditos: ".$objCliente->getCredito();


?>