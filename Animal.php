<?php
class Animal{
    public $name;
    public $legs = 2;
    public $cold_blooded = "false";

    public function __construct($name){
        $this->name=$name;
    }

    //setter
    public function setName($name){
        $this->name=$name;
    }
    //getter
    public function getName(){
        return $this->name;
    }
    public function getLegs(){
        return $this->legs;
    }
    public function getBlood(){
        return $this->cold_blooded;
    }
}