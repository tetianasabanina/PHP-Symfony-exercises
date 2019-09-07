<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<body>

    <?php
        // Navbar
        include("navbar/navbar.php");
    ?>

    <h1>Hae linkki avainsanolla</h1>

    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="inputAvainsana" class="sr-only">Avainsana</label>
        <input type="text" name="avainsana" id="inputAvainsana" class="form-control" placeholder="Syötä avainsana" required autofocus>

        <button name="haku" class="btn btn-primary" type="submit">Haku</button>
    </form>
    <?php if (isset($_POST['haku'])) {
            // Referensi Linkki-olioon
            require 'Linkki.php';

            // Luodaan Linkki-olio
            $linkki = new Linkki();

            // Pyydetään Linkki-oliota ottamaan yhteys tietokantaan
            $linkki->luoYhteysTietokantaan();

            // Haetaan tietyn linkin tiedot taulukkoon
            
            $avainsana = $_POST['avainsana'];
            // echo "avainsana = " . $avainsana . "<br>";
            $linkit = $linkki->haeAvainsanolla($avainsana);
            // print_r ($linkit);
        }
    ?>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Otsikko</th>
                <th>Linkki</th>
                <th>Avainsana</th>
                <th>Toiminnot</th>
            </tr>
        </thead>
    <?php
    // Tulostetaan kaikki henkilöt
    foreach ($linkit as $linkki) {
        $id = $linkki['avainsana'];
        ?>
        <tr>
            <td><?php echo $linkki['id'] ?></td>
            <td><?php echo $linkki['otsikko'] ?></td>
            <td><?php echo $linkki['linkki'] ?></td>
            <td><?php echo $linkki['avainsana'] ?></td>
            
            <td>
                
                <!--
                <button muuta-id="<?php echo $id ?>" class="btn btn-primary  muuta-object">Muuta</button>
                
                -->
                <a href='muutaLinkki.php?id=<?php echo $id ?>' 
                class="btn btn-primary" role="button">Muuta</a>
                <a href='poistaLinkki.php?id=<?php echo $id ?>' 
                class="btn btn-danger" role="button">Poista</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>