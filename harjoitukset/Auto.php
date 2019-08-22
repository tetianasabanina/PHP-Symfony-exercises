<?php
    class Auto{
        
        protected $reknumero;
        protected $merkki;
        protected $malli;
        protected $vuosi;

        
        public function getAuto(){
            
            return $this->reknumero . ", " . $this->merkki . ", " . $this->malli . ", " . $this->vuosi; 
        } 
        
        
        public function setAuto($reknumero, $merkki, $malli, $vuosi){
           
            $this->reknumero = $reknumero;
            $this->merkki = $merkki;
            $this->malli = $malli;
            $this->vuosi = $vuosi;
        }
        
    }

?>