<?php 
include "peli.php";

$player = new PlayerHealthManager(0, 100);

$player->addPlayerHealth(120);

$player->hurtPlayer(50);

?>