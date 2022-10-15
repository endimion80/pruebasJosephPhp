<?php

    require_once ("classUsuario.php");

    $objUsuarioUno = new Usuario("Andres Cardona","andres@info.com","Admin");
    $objAndrea = new Usuario("Andrea Cardona","andrea@info.com","Cliente");

    echo $objUsuarioUno->getPerfil();
    echo "<br><br>";

    echo $objAndrea->getPerfil();
    $objAndrea->setCambiarClave("123456789");
    
    echo "<br><br>";
    echo $objAndrea->getPerfil();

?>