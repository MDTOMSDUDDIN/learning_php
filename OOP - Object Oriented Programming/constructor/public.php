<?php

class Car {
    public function __construct(public $brand, public $color) {
    }

    public function displayInfo() {
        return "This is a {$this->color} {$this->brand}.";
    }
}

$myCar = new Car("Toyota", "Red");
echo $myCar->displayInfo(); 
