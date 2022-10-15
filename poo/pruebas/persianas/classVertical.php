<?php

    require_once ("classPersiana.php");

        class Vertical extends Persiana{
        
            
            private $intLama;
        
            function __construct(string $nombre, string $modelo, string $color, float $ancho, float $alto, string $material, int $unidades){
                parent::__construct($nombre, $modelo, $color, $ancho, $alto, $material, $unidades);
            }

        public function setLama(int $lama){
            $this->intLama = $lama;
        }

        public function getLama():int
            {
                return $this->intLama;
            }
        }    

//parte nueva
    require_once ("classEstor.php");
    
        class Estor extends Vertical{

            private $strGrupo;
            private $intReferencia;

            function __construct(string $nombre, string $modelo, string $color, float $ancho, float $alto, string $material, int $unidades){
                parent::__construct($nombre, $modelo, $color, $ancho, $alto, $material, $unidades);
            }

            public function setGrupo(string $grupo){
                $this->strGrupo = $grupo;
            }
    
            public function getGrupo():string
                {
                    return $this->strGrupo;
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