<?php

class Car {

    //Constructor
    public function __construct()
    {
        echo "ini konstructor";
    }
    
    //Atribut
    public $color = "red";
    public $max_seed = 300;

    //Method
    public function jalan () {
        echo "Mobil Berjalan...";
    }
}

$avanza = new Car;
$avanza->jalan();