<?php
    class Linkki{
        
        public $id;
        public $linkki;
        public $otsikko;
        public $kuvaus;
        public $avainsana;
        
        public function __construct($id, $linkki, $otsikko, $kuvaus, $avainsana) {
            $this->id = $id;
            $this->linkki = $linkki;
            $this->otsikko = $otsikko;
            $this->kuvaus = $kuvaus;
            $this->avainsana = $avainsana;
            
        }

        public function getId(){
           
            return $this->id;  
        }
        public function getLinkki(){
           
            return $this->linkki;  
        }
        public function getOtsikko(){
           
            return $this->otsikko;  
        }
        public function getKuvaus(){
           
            return $this->kuvaus;  
        }
        public function getAvainsana(){
           
            return $this->avainsana;  
        }
       
        public function tulostaTiedot() {
            return "Linkin tiedot ovat: " . "<br>". 
            "id: " . $this->getId() . "<br>" .
            "linkki: " . $this->getLinkki() . "<br>".
            "otsikko: " . $this->getOtsikko() . "<br>".
            "kuvaus: " . $this->getKuvaus() . "<br>".
            "avainsana: " . $this->getAvainsana() . "<br>";
        }
        
    }

?>