<?php

    $link = "mysql:host=miweb.localhost;dbname=persianas";
    $user = "tax3718";
    $pass = "Qwerty7890#";
    
    try {
        $pdo = new PDO($link,$user,$pass);
        echo "Conectado";

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
/*
    $sql = "CREATE TABLE persiana(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        modelo VARCHAR(30) NOT NULL,
        color VARCHAR(30) NOT NULL,
        ancho FLOAT(5) NOT NULL,
        alto FLOAT(5) NOT NULL,
        material VARCHAR(20) NOT NULL,
        unidades INT(5) NOT NULL
    )";

    if($pdo->query($sql) === true){
        echo "La tabla se creó correctamente...";
    }else{
        die("Error al crear la tabla: " . $pdo->error);
    }
*/


?>