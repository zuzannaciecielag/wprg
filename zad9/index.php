<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "Fire.php";
require_once "Water.php";
require_once "Pokemon.php";
require_once "Battle.php";

$poke1 = new Fire("An", 25, "photos/fire.png");
$poke2 = new Water("Min", 30, "photos/water.jpg");

$poke1->view();
$poke2->view();

$battle = new Battle($poke1, $poke2);
$battle->go();