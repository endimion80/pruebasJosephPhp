<?php
/*
    $dependencias=simplexml_load_file('http://maven.apache.org/maven-v4_0_0.xsd');
        echo $dependencias->element[0];
*/

    $xml = simplexml_load_file('http://maven.apache.org/maven-v4_0_0.xsd') or die('no se puede!');
    
    foreach($xml as $record) {
        echo ($record->dependencies->version);
    }
    

?>