<?php

    if ($_GET){
    
    $nombre=$_GET['txtNombre'];
    $apellido=$_GET['txtApellido'];
    $manzanas=$_GET['manzanas'];
    $peras=$_GET['peras'];
    $suma=$manzanas+$peras;

}

    $today = getdate();
    $hora=$today["hours"];
    if ($hora<6) {
    echo(" Hoy has madrugado mucho... ");
    }elseif($hora<12){
    echo(" Buenos días! ");
    }elseif($hora<=18){ // ponia 18 (pero aún es muy de tarde, no? ;-) ....PEEEERO! da error (no se muestran datos, solo buenas tardes) si pongo las 21 y son mas de las 18
    echo("Buenas Tardes! ");
    }else{ echo "Buenas Noches! ".$nombre." ".$apellido." llevas un total de ".$suma." piezas de fruta."; } 
        
?>