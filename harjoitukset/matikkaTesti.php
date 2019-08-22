<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Matikka</title>

    <?php include("matikka.php"); ?>
</head>
<body>
    <h1>Matikka testi<h1>
    
    <?php
    $energy = new Matikka();
    
    $energy->setKcal(3);
    $energy->setJoule(12552);
    
    echo $energy->jouleConverter() . "<br>";
    print ($energy->kcalConverter() . "<br>");

    $circle = new Matikka();
    $circle->setRadius(2);
    
    print ($circle->circleArea() . "<br>");

    $rectangle = new Matikka();
    $rectangle->width = 5;
    $rectangle->height =2;
    echo $rectangle->rectArea() . "<br>";

    $temper = new Matikka();
    $temper->cels = 32;
    $temper->fahr = 32;
    echo $temper->celsiusConverter() . "<br>";
    echo $temper->fahrConverter() . "<br>";

    $angle = new Matikka();
    $angle->radian = 10;
    echo $angle->radianConverter() . "<br>";

    ?>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>