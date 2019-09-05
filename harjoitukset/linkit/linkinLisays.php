<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    <title>Linkki Lisäys</title>
  </head>
  <body>
  <?php include 'navbar/navbar.php'?>
    <?php 
    // referenssi Linnki-olioon
    include "Linkki.php";
    
    $linkki = new Linkki();
    // print_r($linkki);
    echo "hello from linkinLisays.php";
    // Asetetaan lomakkeelta tulleet tiedot muuttujiin

    $linkki->setId($_POST['id']);
    $linkki->setLinkki($_POST['linkki']);
    $linkki->setOtsikko($_POST['otsikko']);
    $linkki->setKuvaus($_POST['kuvaus']);
    $linkki->setAvainsana($_POST['avainsana']);
   
    echo " linkki ";
    print_r($linkki);
    // echo " variable";
    // pyydetään auto-oliota ottamaan yhteys tietokantaan
    $linkki->luoYhteysTietokantaan();
    echo "yhteys ok ";
    // Pyydetään linkki-oliota lisäämään tietue
    $lisaysOk = $linkki->lisaaLinkki();

    if($lisaysOk > 0) {
        echo "Lisäys onnistui.";
    } else {
        echo "Lisäys epäonnistui.";
    }

    ?>
</body>
</html>