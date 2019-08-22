<?php
    class Henkilo{
        // Julkista muuttuja voidaan kutsua luokan ulkopuolelta.
        public $nimi;

        // Yksityinen (private) muuttuja on sellainen johon pääsee
        // käsiksi vain luokan sisällä
        private $pinkoodi;

        // privattia metodia voi kutsua vain luokan sisältä
        private function getPinkoodi() {
            return $this->pinkoodi;
        }

        public function setPinkoodi($pinkoodi) {
            $this->pinkoodi = $pinkoodi;
        }


        // Koodataan oma metodi, joka tulostaa henkilon nimin ja hänen pinkoodinsa.
        public function tulostaHenkilo() {
            return "Henkilon nimi on " . $this->getNimi() . " ja hänen pinkoodi on " . $this->getPinkoodi();
        }

        // Konstruktori on luokaan kuluva erikoismetodi.
        // Konstruktorin avulla voidaan alustaa luokan ominaisuudet.

        public function __construct($nimi) {
            $this->nimi = $nimi;
        }

        // get-metodin avulla voidaan hakea tietyn ominaissuden arvo.
        // julkista metodia (public) voidaan kutsua toisesta ohjelmasta.
        public function getNimi(){
            // return-komento palautaa ominaisuuden sisällön.
            return $this->nimi;    
        }
/*
        // set-metodin avulla voidaan asettaa tai muuttaa tietyn 
        // ominaisuuden arvoa. Muutettava arvo välitetään parametrinä
        public function setNimi($nimi){
            // set-metodista puuttuu return-komento eli se ei palauta mitään.
            $this->nimi = $nimi;
        } 
        */
    }

?>