<?php

    require_once ("metros.php");

    class Persiana2 implements Metros{

        public function medidas($ancho, $alto){
            $total = ($ancho * $alto);
            return $total;
        }
    
        private $modelo;
        private $material;
        private $referencia;
        
        public function __construct($modelo, $material, $referencia){

            $this->modelo = $modelo;
            $this->material = $material;
            $this->referencia = $referencia;
            
        }

        public function getDatosPersiana(){

            $datos = "
            <h2>DATOS PERSIANA</h2>
                Modelo: {$this->modelo}<br>
                Material: {$this->material}<br>
                Referencia: {$this->referencia}<br>
                ";
            return $datos;
        }
 
    }

?>