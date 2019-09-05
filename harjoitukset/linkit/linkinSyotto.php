<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    <title>Linkki Syöttö</title>
  </head>
  <body>
  <?php include 'navbar/navbar.php';?>

  <form class="form-signin" action="linkinLisays.php" method="POST">
  
    <h1 class="h3 mb-3 font-weight-normal">Lisää linkki</h1>

    <label for="inputId" class="sr-only">ID</label>
    <input name="id" type="text" id="inputText" class="form-control" placeholder="Id" required autofocus>
    
    <label for="inputLinkki" class="sr-only">Linkki</label>
    <input name="linkki" type="text" id="inputText" class="form-control" placeholder="Linkki" required>
    
    <label for="inputOtsikko" class="sr-only">Otsikko</label>
    <input name="otsikko" type="text" id="inputText" class="form-control" placeholder="Otsikko" required>

    <label for="inputKuvaus" class="sr-only">Kuvaus</label>
    <input name="kuvaus" type="text" id="inputText" class="form-control" placeholder="kuvaus" required>
    
    <label for="inputAvainsana" class="sr-only">Avainsana</label>
    <input name="avainsana" type="text" id="inputText" class="form-control" placeholder="avainsana" required>

    <div class="checkbox mb-3">
       
    </div>
    <button class="btn btn-lg btn-info btn-block" type="submit">Talenna</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>