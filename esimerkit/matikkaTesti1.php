<?php 
include "matikka2.php";

$matikka = new Matikka();

// testataan metodia. $_POST-taulukko on globaali-taulukko.
$kalorit = $_POST['kalori']; 
// echo $kalorit . " cal <br>";

echo "<h3>" . $kalorit . " cal = " . $matikka->energiaMuunnin($kalorit) . " J </h3>";
?>

