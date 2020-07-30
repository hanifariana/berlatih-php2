<?php
require_once ('Animal.php');
require_once ('Frog.php');
require_once ('Ape.php');

$sheep = new Animal("shaun");

echo $sheep->name."<br>"; // "shaun"
echo $sheep->legs."<br>"; // 2
echo $sheep->cold_blooded."<br>"; // false

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"