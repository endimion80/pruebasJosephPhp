<?php // Super Clase o clase padre hereda a las sub-clases o hijas (Veneciana y Estor)

    class Persiana{ // Definimos propiedades y metodos que seran heredados por las sub-clases
        private $strNombre;
        private $strModelo;
        private $strColor;
        private $fltAncho;
        private $fltAlto;
        private $strMaterial;
        private $intUnidades;

        function __construct(string $nombre, string $modelo, string $color, float $ancho, float $alto, string $material, int $unidades)
        {
            $this->strNombre = $nombre;
            $this->strModelo = $modelo;
            $this->strColor = $color;
            $this->fltAncho = $ancho;
            $this->fltAlto = $alto;
            $this->strMaterial = $material;
            $this->intUnidades = $unidades;

        }

        public function getDatosPersiana()
        {
            $datos = " 
                <h2>DATOS PERSIANA</h2>
                Nombre: {$this->strNombre}<br>
                Modelo: {$this->strModelo}<br>
                Color: {$this->strColor}<br>
                Material: {$this->strMaterial}<br>
                Unidades: {$this->intUnidades}<br>
                Medidas (an x al): {$this->fltAncho} x {$this->fltAlto}<br>
            "; // Se ponen comillas dobles cuando queremos colocar las variables dentro del contenido
            return $datos;
        }
    }

    
?>