<?php
    //Subclase al heredar de la Super clase Persona
    require_once ("classPersona.php"); //Requiere una vez la clase persona
    class Alumno extends Persona{ //Se realiza una herencia. La clase alumno va a heredar las propiedades y metodos de la clase persona

        private $intNota;

        function __construct(string $nombre, string $apellido, int $edad){
            parent::__construct($nombre, $apellido, $edad); //Heredando del elemento padre (clase persona)
        }

        public function setNota(int $nota){ //Asignamos el parametro 
            $this->intNota = $nota;
        }

        public function getNota():int //Obtenemos el parametro
        {
            return $this->intNota;
        }

    }
    
?>