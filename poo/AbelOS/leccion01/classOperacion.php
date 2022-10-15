<?php

    class Operacion{

        //Propiedades
        public $cantidadUno = 0;
        public $cantidadDos = 0;
        public $resultado = 0;

        //Metodo constructor no siempre se usa. Depende de la forma de trabajar con los objetos de la classe
        function __construct($intCant1, $intCant2){

            $this->cantidadUno = $intCant1;
            $this->cantidadDos = $intCant2;

        }
    
        //Metodos
        public function getSuma(){
            $this->resultado = $this->cantidadUno + $this->cantidadDos;
            return $this->resultado;
        }

        public function getResta(){
            $this->resultado = $this->cantidadUno - $this->cantidadDos;
            return $this->resultado;
        }

        public function getMultiplicacion(){
            $this->resultado = $this->cantidadUno * $this->cantidadDos;
            return $this->resultado;
        }

        public function getDivicion(){
            $this->resultado = $this->cantidadUno / $this->cantidadDos;
            return $this->resultado;
        }        

    } // End class operation

    //La instanciacion se hace en un archivo a parte (en este ejercicio/ejemplo) "index.php" 


?>