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

        if (isset($_POST['haku'])) {
            // Referensi Henkilo-olioon
            require 'Henkilo.php';

            // Luodaan henkilo-olio
            $henkilo = new Henkilo();

            // Pyydetään henkilo-oliota ottamaan yhteys tietokantaan
            $henkilo->luoYhteysTietokantaan();

            // Haetaan tietyn henkilön tiedot taulukkoon
            
            $sukunimi = $_POST['sukunimi'];
            //echo "sukunimi = " . $sukunimi . "<br>";
            $henkilot = $henkilo->haeSukunimella($sukunimi);
            // print_r ($henkilot);
        }
    ?>
    <h1>Hae henkilö sukunimellä</h1>

    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="inputSukunimi" class="sr-only">Sukunimi</label>
        <input type="text" name="sukunimi" id="inputSukunimi" class="form-control" placeholder="Syötä sukunimi" required autofocus>

        <button name="haku" class="btn btn-primary" type="submit">Haku</button>
    </form>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Etunimi</th>
                <th>Sukunimi</th>
                <th>Osasto</th>
                <th>Palkka</th>
                <th>Toiminnot</th>
            </tr>
        </thead>
    <?php
    // Tulostetaan kaikki henkilöt
    foreach ($henkilot as $henkilo) {
        $id = $henkilo['henkilonumero'];
        ?>
        <tr>
            <td><?php echo $henkilo['henkilonumero'] ?></td>
            <td><?php echo $henkilo['etunumi'] ?></td>
            <td><?php echo $henkilo['sukunimi'] ?></td>
            <td><?php echo $henkilo['osasto'] ?></td>
            <td><?php echo $henkilo['palkka'] ?></td>
            <td>
                <button muuta-id="<?php echo $id ?>" class="btn btn-primary  muuta-object">Muuta</button>
                <a href='poistaHenkilo.php?id=<?php echo $id ?>' 
                class="btn btn-danger" role="button">Poista</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>