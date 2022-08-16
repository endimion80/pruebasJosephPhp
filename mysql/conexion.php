<?php

    $servidor = "miweb.localhost";
    $nombreusuario = "tax3718";
    $password = "Qwerty7890#";
    //$db = "demo_json";

    //Creando nuevo(new) objeto.
    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    //Compruba la conexión.
    if($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    
    echo "Conexíon exitosa...";

    
?>