<?php

    class Usuario{

        private $strNombre;
        private $strEmail;
        private $strTipo;
        private $strClave;
        protected $strFechaRegistro; //Solo accesible desde la misma clase y desde la clase donde la heredan.
        static $strEstado = "Activo"; //Se asigna un valor fijo para todos los de la clase, no al objeto donde se crea.

        function __construct(string $nombre, string $email, string $tipo)
        {
            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();
            $this->strFechaRegistro = date('d-m-Y H:m:s');
        }

        public function getNombre():string
        {
            return $this->strNombre;
        }

        public function getPerfil()
        {
            echo "Datos del usuario <br>";
            echo "Nombre: ". $this->strNombre."<br>";
            echo "Email: ". $this->strEmail."<br>";
            echo "Clave: ". $this->strClave."<br>";
            echo "Fecha de registro: ". $this->strFechaRegistro."<br>";
            echo "Estado: ". self::$strEstado."<br>";
        }

        public function setCambiarClave(string $pass){
            $this->strClave = $pass;
        }

    }//End class usuario


?>