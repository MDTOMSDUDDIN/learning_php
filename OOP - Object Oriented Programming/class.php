<?php

class Car {

    public $color;

    public function drive() {
        echo "Driving this Car";
    }
}

$myCar = new Car();       

$myCar->color = "reed";
$myCar->drive();  
