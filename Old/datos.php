<?php

$datos_marcadores = file_get_contents("datos.json");
$json_marcadores = json_decode($datos_marcadores, true);

foreach ($json_marcadores as $marcador) {
    echo '<pre>';
    print_r($marcador).'<br/>'; // Se muestran todos los datos.
    print_r($marcador[1]).'<br/>'; // Se muestra solo el dato solicitado.
    echo '</pre>';

/*  PRIMERA PRUEBA   
    echo "Latitud: ".$marcador['latitude'].'<br/>';
    echo "Longitud: ".$marcad['longitude'].'<br/>';
    echo "Ciudad: ".$marcador['city'].'<br/>';
    echo "Lugar: ".$marcador['description'].'<br/>';
*/

}


?>
