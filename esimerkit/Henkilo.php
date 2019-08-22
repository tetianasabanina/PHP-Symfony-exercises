<?php
    class Henkilo{
        // Julkista muuttuja voidaan kutsua luokan ulkopuolelta.
        public $nimi;

        // get-metodin avulla voidaan hakea tietyn ominaissuden arvo.
        // julkista metodia (public) voidaan kutsua toisesta ohjelmasta.
        public function getNimi(){
            // return-komento palautaa ominaisuuden sisällön.
            return $this->nimi;    
        }

        // set-metodin avulla voidaan asettaa tai muuttaa tietyn 
        // ominaisuuden arvoa. Muutettava arvo välitetään parametrinä
        public function setNimi($nimi){
            // set-metodista puuttuu return-komento eli se ei palauta mitään.
            $this->nimi = $nimi;
        }
    }

?>