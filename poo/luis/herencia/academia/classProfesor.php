<?php
    //Subclase al heredar de la Super clase Persona
    require_once ("classPersona.php");
    class Profesor extends Persona{

        private $strAsignatura;

        function __construct(string $nombre, string $apellido, int $edad){
            parent::__construct($nombre, $apellido, $edad);
        }
    
        public function setAsignatura(string $asignatura){
            $this->strAsignatura = $asignatura;
        }

        public function getAsignatura():string
        {
            return $this->strAsignatura;
        }

    }
?>