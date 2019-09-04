<?php

class YhteydenHallinta {
    // Tietokantayhteys tallenetaan tähän ominaisuuteen
    private $yhteys;

    // Tietokannan tiedot talletettu tähän ominaisuuteen 
    private $konfiguraatio; 

    public function __construct($_konfiguraatio = 'yhteyskonfig.ini'){
        $this->konfiguraatio = $_konfiguraatio;
    }
    // Avaa tietokantayhteyden
    private function avaaYhteys(){
        // Purkaa ini-tiedoston taulukoksi
        $init = parse_ini_file($this->konfiguraatio, true);
        // echo "Hello from avaaYhteys";
        // Alustetaan tietokannan avamiseen liittyvät ominaisuudet
        $ajuri = $init['tietokanta']['ajuri'];
        $palvelin = $init['tietokanta']['palvelin'];
        $portti = $init['tietokanta']['portti'];
        $kanta = $init['tietokanta']['kanta'];
        $kayttaja = $init['tietokanta']['kayttaja'];
        $salasana = $init['tietokanta']['salasana'];
        $url = "{$ajuri}:host={$palvelin};port={$portti};dbname={$kanta}";

        // try-lohkoon tulee se koodi, joka voi aiheuttaa kriittisen virheen
        
        try {
            // luo yhteyden tietokantaan PDO-olion avulla
            $this->yhteys = new PDO('mysql:host=localhost;dbname=henkilostokanta', $kayttaja, $salasana);
            //new PDO($url, $kayttaja, $salasana, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // palauttaa tietokantayhteyden
            
            return $this->yhteys;

        } catch(Exception $e) {
            // catch-lohkkon hypätään jos tulee virhe
            print_r($e);
            echo $e->getMessage();
            //siirrytään virhesivulle
            /*header("Location: virhe.php");
            exit();*/ 
        }

    }
    // suorita SQL-kyselyjä
    public function suoritaHakuLause($sqlLause, $parametritaulukko = Array()) {
        // Avataan tietokantayhteys
        $this->avaaYhteys();

        // Valmistellaan hakukysely
        $suoritettavalause = $this->yhteys->prepare($sqlLause);

        // liitetään parametritaulukon arvot merkityn parametrin tilalle 
        // ja suoritetaan varsinainen kysely 
        $suoritettavalause->execute($parametritaulukko);

        // Haetaan tulostaulukko ja suljetaan yhteys
        $tulosjoukko = $suoritettavalause->fetchAll(PDO::FETCH_ASSOC);
        //suljetaan yhteys
        $this->suljeYhteys();

        // palautetaan tulosjoukko
        return $tulosjoukko;
    }

    // metodia kutsutaan kun suoritetaan lisäys (insert), poisto (delete) tai päivitys (update)
    public function suoritaPaivitysLause($sqlLause, $parametritaulukko = Array()) {
        // echo "hello grom suoritaPayvityslause ";
        $this->avaaYhteys();
        try {
            $suoritettavaLause = $this->yhteys->prepare($sqlLause);
            // echo "sqlLause " . $sqlLause . " ";
            $suoritettavaLause->execute($parametritaulukko);
            // palautta tietuiden määrän (0 - ei tietuetta)
            $lkm = $suoritettavaLause->rowCount();
            //suljetaan yhteys
            $this->suljeYhteys();
            
        }
        catch(PDOExeption $e) {
            // jos tuli virhe asetaan tietueiden määrä nolliksi
            $lkm = 0;
        }
         // palautetaan tietueiden määrä
        return $lkm;
    } 
    private function suljeYhteys(){
        $this->yhteys = null;
    }

}
?>