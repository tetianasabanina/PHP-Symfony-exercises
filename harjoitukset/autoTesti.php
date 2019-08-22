<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Harjoitus 1</title>
    <!-- Luodaan yhteys Auto-luokkaan -->
    <?php include("Auto.php"); ?>
  </head>
  <body>
    <h1>Auto-luokan testaus</h1>

    <!--  Tästä alkaa osoite-luokan testaus -->
    <?php 
      
      // Luodaan Auto-luokasta ilmentymä mazda, jota kutsutaan olioksi.
      // Olio taletetaan muistiin, palvelimen muistiin
      $mazda = new Auto();

      // Luodaan toinen olio bmv
      $bmw = new Auto();

      // Annetaan olioille nimi
      $mazda->setAuto("mz 0202", "Mazda", "1010", "1999");
     
      $bmw->setAuto("bm 0101", "BMW", "105", "1899");
     

      // Olion ominaisuuksiin pääsee kiini get-metodilla, koska se on julkinen.
      echo "Auto1 on " . $mazda->getAuto() . "<br>";
      echo "Auto2 on " . $bmw->getAuto() . "<br>";
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>