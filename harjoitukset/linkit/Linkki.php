<?php ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
<?php
class Linkki {
    private $id;
    private $linkki;
    private $otsikko;
    private $kuvaus;
    private $avainsana;
        // tietokannan varten

    private $yhteydenhallinta;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id; 
    }

    public function getLinkki() {
        return $this->linkki;
    }
    public function setLinkki($linkki) {
        $this->linkki = $linkki ; 
    }
    
    public function getOtsikko() {
        return $this->otsikko;
    }
    public function setOtsikko($otsikko) {
        $this->otsikko = $otsikko ; 
    }
    
    public function getKuvaus() {
        return $this->kuvaus;
    }
    public function setKuvaus($kuvaus) {
        $this->kuvaus = $kuvaus ; 
    }

    public function getAvainsana() {
        return $this->avainsana;
    }
    public function setAvainsana($avainsana) {
        $this->avainsana = $avainsana ; 
    }

    public function luoYhteysTietokantaan() {
        // Referenssi luokkaan yhteydenHallinta
        include("Yhteydenhallinta.php");

        // Otetaan yhteys tietokantaan
        $this->yhteydenhallinta = new Yhteydenhallinta();
    }
    public function haeKaikkiLinkit() {
        return $this->yhteydenhallinta->suoritaHakuLause("select * from linkit");
    }

    public function lisaaLinkki() {
        //echo "hello from lisaaLinkki()";
        return $this->yhteydenhallinta->suoritaPaivitysLause("
        insert into linkit (id, linkki, otsikko, kuvaus, avainsana) values (?,?,?,?,?)",
        Array($this->id, $this->linkki, $this->otsikko, $this->kuvaus, $this->avainsana));
       
    }
}
?>