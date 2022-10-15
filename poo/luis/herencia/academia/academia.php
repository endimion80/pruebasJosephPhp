<?php

    require_once ("classProfesor.php"); //Requerimos la(s) clase(s)
    require_once ("classAlumno.php");
    
    //Creamos los objetos
    $objProfesor = new Profesor("Pepito","de los Palotes",1); //Instanciamos la clase y le seteamos o asignamos los datos
    $objProfesor->setAsignatura("Matematicas");

    echo $objProfesor->getDatosPersonales();
    echo "Asignatura: ".$objProfesor->getAsignatura();
    
    $objAlumno = new Alumno("José","Corvacho",15); //Instanciamos la clase alumno y le damos los datos
    $objAlumno->setNota(8);

    echo $objAlumno->getDatosPersonales();
    echo "Nota: ".$objAlumno->getNota();

    
?>