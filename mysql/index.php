<?php

    $servidor = "miweb.localhost";
    $nombreusuario = "root";
    $password = "Qwerty7890#";
    $db = "productosDB";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    //CREADA LA CONEXION.
    //echo "Conexíon exitosa...";

    /* CREANDO BASE DE DATOS.
    $sql = "CREATE DATABASE productosDB";
    if($conexion->query($sql) === true){
        echo "Base de datos creada correctamente...";
    }else{
        die("Error al crear la base de datos: " . $conexion->error);
    }
    */

    //CREACION DE TABLA
    $sql = "CREATE TABLE productosTable(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        articulo VARCHAR(30) NOT NULL,
        color VARCHAR(30) NOT NULL,
        nota VARCHAR(100) NOT NULL,
        timestamp TIMESTAMP
    )";

    if($conexion->query($sql) === true){
        echo "La tabla se creó correctamente...";
    }else{
        die("Error al crear la tabla: " . $conexion->error);
}

?>