<?php 

// referenssi Henkilo-olioon
include "Henkilo.php";

$henkilo = new Henkilo();

// Asetetaan lomakkeelta tulleet tiedot muuttujiin

$henkilo->setHenkilonumero($_POST['henkilonumero']);
$henkilo->setEtunimi($_POST['etunumi']);
$henkilo->setSukunimi($_POST['sukunimi']);
$henkilo->setOsasto($_POST['osasto']);
$henkilo->setPalkka($_POST['palkka']);

// pyydetään Henkilo-oliota ottamaan yhteys tietokantaan
$henkilo->luoYhteysTietokantaan();

// Pyydetään Henkilo-oliota lisäämään tietue
$lisaysOk = $henkilo->lisaaHenkilo();

if($lisaysOk > 0) {
    echo "Lisäys onnistui.";
} else {
    echo "Lisäys epäonnistui.";
}

?>