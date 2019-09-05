<?php
class Auto {
    private $rekisterinumero;
    private $merkki;
    private $malli;
    private $valmistusvuosi;
    
        // tietokannan varten

    private $yhteydenhallinta;

    public function getRekisterinumero() {
        return $this->rekisterinumero;
    }
    public function setRekisterinumero($rekisterinumero) {
        $this->rekisterinumero = $rekisterinumero; 
    }

    public function getMerkki() {
        return $this->merkki;
    }
    public function setMerkki($merkki) {
        $this->merkki = $merkki ; 
    }
    
    public function getMalli() {
        return $this->malli;
    }
    public function setMalli($malli) {
        $this->malli = $malli ; 
    }
    
    public function getVuosi() {
        return $this->valmistusvuosi;
    }
    public function setVuosi($valmistusvuosi) {
        $this->valmistusvuosi = $valmistusvuosi ; 
    }

    
    public function luoYhteysTietokantaan() {
        // Referenssi luokkaan yhteydenHallinta
        include("Yhteydenhallinta.php");

        // Otetaan yhteys tietokantaan
        $this->yhteydenhallinta = new Yhteydenhallinta();
    }
    public function haeKaikkiautot() {
        return $this->yhteydenhallinta->suoritaHakuLause("select * from autot");
    }

    public function lisaaAuto() {
        // echo "hello from lisaaAuto()";
        return $this->yhteydenhallinta->suoritaPaivitysLause("
        insert into autot (merkki, malli, valmistusvuosi, rekisterinumero) values (?,?,?,?)",
        Array($this->merkki, $this->malli, $this->valmistusvuosi, $this->rekisterinumero));
       
    }

    public function haeRekisterinumerolla($rekisterinumero) {
        // echo "sukunimi = " . $sukunimi . "<br>";
        return $this->yhteydenhallinta->suoritaHakuLause("
        select * from autot where rekisterinumero = '$rekisterinumero' ");
    }
}


?>