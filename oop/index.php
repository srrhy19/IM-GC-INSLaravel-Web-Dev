<?php
require_once "animal.php";
require_once "Frog.php";
require_once "Ape.php";

// Instance of Animal
$sheep = new Animal("shaun");
echo $sheep->getDetails() . "<br>";

// Instance of Frog
$kodok = new Frog("buduk");
echo $kodok->getDetails() . "<br>";

// Instance of Ape
$sungokong = new Ape("kera sakti");
echo $sungokong->getDetails();
?>
