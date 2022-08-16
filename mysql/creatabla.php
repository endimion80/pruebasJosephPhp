<?php

    $servidor = "miweb.localhost";
    $nombreusuario = "tax3718";
    $password = "Qwerty7890#";
    $db = "demo_json";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    $sql = "CREATE TABLE gente(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        edad INT(2) NOT NULL,
        genero VARCHAR(20) NOT NULL,
        email VARCHAR(50) NOT NULL,
        localidad VARCHAR(50) NOT NULL,
        telefono INT(12) NOT NULL
    )";
    
    if($conexion->query($sql) === true){
        echo "La tabla se creó correctamente...";
    }else{
        die("Error al crear la tabla: " . $conexion->error);
    }

?>