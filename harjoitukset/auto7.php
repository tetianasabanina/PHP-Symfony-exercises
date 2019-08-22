<?php
    class Auto{
        
        public $reknumero;
        public $merkki;
        public $malli;
        public $vuosi;
        private $tankinTilavuus;
        private $bensanMaara;
        public $moottori="samutettu";

        public function getAuto(){
            
            return $this->reknumero . ", " . $this->merkki . ", " . $this->malli . ", " . $this->vuosi; 
        } 
        
        public function getTilavuus(){
            return $this->tilavuus;
        }
        public function getBensanMaara(){
            return $this->bensa;
        }
        
        public function __construct($reknumero, $merkki, $malli, $vuosi, $tankinTilavuus, $bensanMaara, $moottori){
            if ($reknumero){
                $this->reknumero = $reknumero;
            }
            if ($merkki){
                $this->merkki = $merkki;
            }
            if ($malli){
                $this->malli = $malli;
            }
            if ($vuosi){
                $this->vuosi = $vuosi;
            }
            if ($tankinTilavuus){
            $this->tilavuus = $tankinTilavuus;
            }
            if ($bensanMaara){
                $this->bensa = $bensanMaara;
            }
            if ($moottori){
                $this->moottori = $moottori;
            }
        }
        public function setTilavuus($tankinTilavuus){
            $this->tilavuus = $tankinTilavuus;
        }
        public function setBensanMaara($bensanMaara){
            $this->bensa = $bensanMaara;
        }
        public function start(){
            $this->moottori = "käyninstetty";
            echo "auto on " . $this->moottori . "<br>";
            echo $this->tilavuus . " l bensaa jäljellä <br>";
        }
        public function tulostaAutonTiedot(){
            return "Auton tiedot: " . $this->getAuto() . "<br>Tankin tilavuus on: " . $this->getTilavuus() . 
            " l, bensan lisätäminen määrä on: " . $this->getBensanMaara() . " l, moottori on " . $this->moottori. ".";
        }
        public function lisaaBensa(){
            $this->tilavuus += $this->bensa;
            echo $this->bensa . " l bensaa lisätty <br>";
            //echo $this->tilavuus . "l jäljellä <br>";
        }
        
        public function aja($bensanKuulutus){
            if ($this->tilavuus >= $bensanKuulutus) {
                $this->tilavuus -= $bensanKuulutus;
                echo "ajaan... <br>";
                echo $bensanKuulutus . " l bensaa kuulutettu <br>";
                echo $this->tilavuus . " l bensaa jäljellä <br>";
            } else {
                $this->lisaaBensa();
                $this->tilavuus -= $bensanKuulutus;
                echo "ajaan... <br>";
                echo $bensanKuulutus . " l bensaa kuulutettu <br>";
                echo $this->tilavuus . " l bensaa jäljellä <br>";
            }          
        }
        public function sammuta(){
            $this->moottori = "samutettu";
            echo "auto on " . $this->moottori . "<br>";
        }
    }

?>