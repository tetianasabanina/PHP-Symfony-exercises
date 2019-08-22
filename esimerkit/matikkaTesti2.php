<?php 
include "matikka2.php";

$matikka = new Matikka();
$kalorit = 10;

echo "<h3>" . $kalorit . " cal = " . $matikka->energiaMuunnin($kalorit) . " J </h3>";

$matikka->setKalori(10);

echo "<p>" . $kalorit . " cal = " . $matikka->energiaMuunnin2() . " J </p>";


echo $matikka->energiaMuunnin3(-1, -1);

?>

