<?php
require_once('Animal.php');
class Ape extends Animal{
    public function __construct($name){
        $this->name=$name;
    }
    public function yell(){
        echo "Auooo"."<br>";
    }
}