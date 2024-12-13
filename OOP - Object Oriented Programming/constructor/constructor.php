<?php
class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function drive() {
        echo "The {$this->color} {$this->brand} is driving.";
    }
}

$myCar = new Car("Toyota", "Red");
$myCar->drive(); 
