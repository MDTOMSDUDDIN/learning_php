<?php

class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
        echo "Car {$this->brand} has been created. <br>";
    }
   
    public function __destruct() {
        echo "Car {$this->brand} is being destroyed. <br>";
    }
}

$myCar = new Car("Toyota", "Red");

unset($myCar);

