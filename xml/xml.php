<?php

// Codigo y diseño creado para mostrar por consola/terminal.

    $xml = simplexml_load_file("dataset.xml") or die("no puedo leerlo");
    
//    echo dashes(115)."\n"; //crea linea superior
    foreach($xml as $record) {
        $row = "| ".pad(5,$record->id)." | ".pad(20,$record->first_name)." | ".pad(40,$record->email)." | ".pad(15,$record->gender)." | ".pad(20,$record->ip_address)." |\n";
        echo $row;
    }
//    echo dashes(115)."\n"; //crea linea inferior

    function pad($length, $value) {
        if(strlen($value) < $length) {
            for($i = strlen($value); $i < $length; $i++) {
                $value.=" ";
            }
        }
        return $value;
    }

    function dashes($length) {
        $str="";
        for($i = 0; $i <= $length; $i++) {
            $str.="-";
        }
        return $str;
    }
?>
