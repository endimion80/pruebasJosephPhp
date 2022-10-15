<?php
    //Esta clase (Super Clase) va a heredar a las otras dos clases (alumno y profesor) 
    class Persona{ //Propiedades de las personas

        private $strNombre;
        private $strApellido;
        private $intEdad;

        function __construct(string $nombre, string $apellido, int $edad) //Definimos metodo constructor
        {
            $this->strNombre = $nombre;
            $this->strApellido = $apellido;
            $this->intEdad = $edad;
        }

        public function getDatosPersonales()
        {
            $datos = " 
                <h2>DATOS PERSONALES</h2>
                Nombre: {$this->strNombre}<br>
                Apellido: {$this->strApellido}<br>
                Edad: {$this->intEdad}<br>
            "; //Se ponen comillas dobles cuando queremos colocar las variables dentro del contenido 
            return $datos;
        } 
    }


?>