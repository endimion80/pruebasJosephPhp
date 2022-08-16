<?php
    //Subclase al heredar de la Super clase Persiana
    require_once ("classPersiana.php"); //Requiere una vez la clase Persiana
    class Veneciana extends Persiana{ //Se realiza una herencia. La clase Veneciana va a heredar las propiedades y métodos de la clase Persiana

        private $strMandos; 
        private $intSoportes; 

        //Heredando del elemento padre
        function __construct(string $nombre, string $modelo, string $color, float $ancho, float $alto, string $material, int $unidades){
            parent::__construct($nombre, $modelo, $color, $ancho, $alto, $material, $unidades); 
        }

        //Asignamos el parametro
        public function setMandos(string $mandos){
            $this->strMandos = $mandos;
        }
        //Obtenemos el parametro
        public function getMandos():string
        {
            return $this->strMandos;
        }

        
        public function setSoportes(int $soportes){
            $this->intSoportes = $soportes;
        }

        public function getSoportes():int
        {
            return $this->intSoportes;
        }

    }

?>