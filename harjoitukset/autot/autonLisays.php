<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    <title>Auton Lisäys</title>
  </head>
  <body>
  <?php include 'navbar/navbar.php'?>
    <?php 
    // referenssi Auto-olioon
    include "Auto.php";
    
    $auto = new Auto();
    // echo "hello from autonLisays.php";
    // Asetetaan lomakkeelta tulleet tiedot muuttujiin

    $auto->setRekisterinumero($_POST['rekisterinumero']);
    $auto->setMerkki($_POST['merkki']);
    $auto->setMalli($_POST['malli']);
    $auto->setVuosi($_POST['valmistusvuosi']);
    // echo " auto ";
    // print_r($auto);
    // echo " variable";
    // pyydetään auto-oliota ottamaan yhteys tietokantaan
    $auto->luoYhteysTietokantaan();

    // Pyydetään auto-oliota lisäämään tietue
    $lisaysOk = $auto->lisaaAuto();

    if($lisaysOk > 0) {
        echo "Lisäys onnistui.";
    } else {
        echo "Lisäys epäonnistui.";
    }

    ?>
</body>
</html>