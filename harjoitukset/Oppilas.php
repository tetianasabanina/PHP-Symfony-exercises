<?php
    class Oppilas{
        
        public $etunimi;
        public $sukunimi;
        public $kotiosoite;
        public $email;

        private $opiskeljanumero;
        
        // Konstruktori on luokaan kuluva erikoismetodi.
        // Konstruktorin avulla voidaan alustaa luokan ominaisuudet.

        public function __construct($etunimi, $sukunimi, $kotiosoite, $email, $opiskeljanro ) {
            $this->etunimi = $etunimi;
            $this->sukunimi = $sukunimi;
            $this->kotiosoite = $kotiosoite;
            $this->email = $email;
            $this->opNum = $opiskeljanro;
        }

        // get-metodin avulla voidaan hakea tietyn ominaissuden arvo.
        // julkista metodia (public) voidaan kutsua toisesta ohjelmasta.
        public function getOppilas(){
            // return-komento palautaa ominaisuuden sisällön.
            return $this->etunimi . ", " . $this->sukunimi . ", " . $this->kotiosoite . ", " . $this->email;    
        }
        private function getOpNum() {
            return $this->opNum;
        }
        // set-metodin avulla voidaan asettaa tai muuttaa tietyn 
        // ominaisuuden arvoa. Muutettava arvo välitetään parametrinä
        public function setOpNumero($opiskeljanro){
            // set-metodista puuttuu return-komento eli se ei palauta mitään.
            $this->opNum = $opiskeljanro;
        } 
        public function tulostaOppilas() {
            return "Oppilaiden tiedot ovat: " . $this->getOppilas() . " ja hänen oppilasnumero " . $this->getOpNum() ;
        }
        
    }

?>