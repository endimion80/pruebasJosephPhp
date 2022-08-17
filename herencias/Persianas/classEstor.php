<?php

    require_once ("classPersiana.php");
    
    class Estor extends Persiana{
    
        private $intGrupo;
        private $intReferencia;

        function __construct(string $nombre, string $modelo, string $color, float $ancho, float $alto, string $material, int $unidades){
            parent::__construct($nombre, $modelo, $color, $ancho, $alto, $material, $unidades);
        }
    
    public function setGrupo(int $grupo){
        $this->intGrupo = $grupo;
    }

    public function getGrupo():int
        {
            return $this->intGrupo;
        }

    public function setReferencia(int $referencia){
        $this->intReferencia = $referencia;
    }

    public function getReferencia():int
        {
            return $this->intReferencia;
        }    

}    
?>