<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extraharjoitus1</title>
</head>
<body>
<h1>Extraharjoitus1</h1>
<p>Tee metodi, joka muuntaa tekstissä olevat numerot merkkijonoksi. 
Muunnettava teksti välitetään parametrinä ja metodi palauttaa muunnetun tiedoston kutsuvalle ohjelmalle.
Alkuperäinen teksti: Herra Huun osoite on tattisuonkatu 4 A 123.
Muutettu teksti: Herra Huun osoite on tattisuonkatu neljä A satakaksikymmentäkolme</p>
<?php 
$string = "Herra Huun osoite on tattisuonkatu 4 A 123";
function muuntaTeksti($str) {
    $newString = str_replace(4, nelja, $str);
    $newString = str_replace(123, satakaksikymmentäkolme, $newString);
    return $newString; 
};

echo "Muutettu teksti on: " . "<b>" . muuntaTeksti($string) . "<b>" . ".";

?>
</body>
</html>