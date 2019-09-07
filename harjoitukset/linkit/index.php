<?php ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Fontawesome -->
  <!-- <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css"> -->
    <title>Linkkisovellus</title>
  </head>
  <body>
  <!-- navbar -->
  <?php include 'navbar/navbar.php'?>

  <?php
    // referenssi Linnki-olioon
    include 'Linkki.php';

    // Luodaan Linkki-olion
    $linkki = new Linkki();

    // Pyydetään linkki-oilota ottamaan yhteys tietokantaan
    $linkki->luoYhteysTietokantaan();
    // Pyydetään linkki-oilota hekemaan kaikki henkilot tietokannasta
    $linkit = $linkki->haeKaikkiLinkit();
    //print_r($linkit);
  
  ?>
  <main class="container">
    <h1>Kaikki linkit</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Otsikko</th>
      <th scope="col">Linkki</th>
      <th scope="col">Avainsana</th>
      <th scope="col">Toiminnot</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    // Tulostetaan kaikki linkit 
    foreach($linkit as $linkki){
      //print_r($linkki1);
      $id = $linkki['id'];
  ?>
    <tr>
      <td><?= $id ?></td>
      <td><?= $linkki['otsikko'] ?></td>
      <td><a href="<?= $linkki['linkki'] ?>"><?= $linkki['kuvaus'] ?></td>
      <td><?= $linkki['avainsana'] ?></td>
      
      <td><button muuta-id="<?php echo $id ?>"
      class="btn btn-primary muuta-object">Muuta</button></td>
      <td><button poista-id="<?php echo $id ?>"
      class="btn btn-danger poista-object">Poista</button></td>
    </tr>
  <?php 
    } 
  ?>
  </tbody>
</table>
</main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script>

      // Siirry muuta-sivulle
      $(document).on('click', '.muuta-object', function(){

        var id = $(this).attr('muuta-id');

        bootbox.confirm({
          message: "<h4>Oletko varma?</h4>",
          buttons: {
            confirm: {
              label: '<i class="far fa-check"></i>Kyllä',
              className: 'btn-danger'
            },
            cancel: {
              label: '<iclass="far fa-times"></i>En',
              className: 'btn-primary'
            },
          },
          callback: function(result) {
            // Painettiinko Kyllä-painiketta?
            if(result) {
              // Kyllä painettiin, joten siirrytään muuta-sivulle
              var url = "muutaLinkki.php?id=" + id;
              $(location).attr('href', url);
            }
          }
        });
      });
            //siirry poista-sivulle
$(document).on('click', '.poista-object', function(){

var id = $(this).attr('poista-id');

bootbox.confirm({
  message: "<h4>Oletko varma?</h4>",
  buttons: {
    confirm: {
      label: '<i class="far fa-check"></i>Kyllä',
      className: 'btn-danger'
    },
    cancel: {
      label: '<iclass="far fa-times"></i>En',
      className: 'btn-primary'
    }
  },
  callback: function(result) {
    // Painettiinko Kyllä-painiketta?
    if(result==true) {
      // Kyllä painettiin, joten siirrytään poista-sivulle
      var url = "poistaLinkki.php?id=" + id;
      $(location).attr('href', url);
    }
  }
});
});
    </script>
  </body>
</html>