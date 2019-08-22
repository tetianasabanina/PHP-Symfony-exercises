<?php
    class Osoite{
        // Julkista muuttuja voidaan kutsua luokan ulkopuolelta.
        protected $lahiosoite;
        protected $postinumero;
        protected $postitoimipaikka;

        // get-metodin avulla voidaan hakea tietyn ominaissuden arvo.
        // julkista metodia (public) voidaan kutsua toisesta ohjelmasta.
        public function getOsoite(){
            // return-komento palautaa ominaisuuden sisällön.
            return $this->lahiosoite . " " . $this->postinumero . " " . $this->postitoimipaikka; 
        } 
        
        // set-metodin avulla voidaan asettaa tai muuttaa tietyn 
        // ominaisuuden arvoa. Muutettava arvo välitetään parametrinä
        public function setOsoite($lahiosoite, $postinumero, $postitoimipaikka){
            // set-metodista puuttuu return-komento eli se ei palauta mitään.
            $this->lahiosoite = $lahiosoite;
            $this->postinumero = $postinumero;
            $this->postitoimipaikka = $postitoimipaikka;
        }
        
    }

?>