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
            // Referensi Auto-olioon
            require 'Auto.php';

            // Luodaan Auto-olio
            $auto = new Auto();

            // Pyydetään auto$auto-oliota ottamaan yhteys tietokantaan
            $auto->luoYhteysTietokantaan();

            // Haetaan tietyn henkilön tiedot taulukkoon
            
            $rekisterinumero = $_POST['rekisterinumero'];
            // echo "rekisterinumero = " . $rekisterinumero . "<br>";
            $autot = $auto->haeRekisterinumerolla($rekisterinumero);
            // print_r ($autot);
        }
    ?>
    <h1>Hae auto rekisterinumerolla</h1>

    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="inputRekisterinumero" class="sr-only">Rekisterinumero</label>
        <input type="text" name="rekisterinumero" id="inputRekisterinumero" class="form-control" placeholder="Syötä rekisterinumero" required autofocus>

        <button name="haku" class="btn btn-primary" type="submit">Haku</button>
    </form>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Rekisterinumero</th>
                <th>Merkki</th>
                <th>Malli</th>
                <th>Valmistusvuosi</th>
                <th>Toiminnot</th>
            </tr>
        </thead>
    <?php
    // Tulostetaan kaikki henkilöt
    foreach ($autot as $auto) {
        $id = $auto['rekisterinumero'];
        ?>
        <tr>
            <td><?php echo $auto['rekisterinumero'] ?></td>
            <td><?php echo $auto['merkki'] ?></td>
            <td><?php echo $auto['malli'] ?></td>
            <td><?php echo $auto['valmistusvuosi'] ?></td>
            
            <td>
                <!--
                <button muuta-id="<?php echo $id ?>" class="btn btn-primary muuta-object"><a href='muutaAuto.php?id=<?php echo $id ?>'>Muuta</a></button>
                -->
                <a href='muutaAuto.php?id=<?php echo $id ?>' 
                class="btn btn-primary" role="button">Muuta</a>
                <a href='poistaAuto.php?id=<?php echo $id ?>' 
                class="btn btn-danger" role="button">Poista</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>