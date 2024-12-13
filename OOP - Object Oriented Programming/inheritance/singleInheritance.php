<?php

class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sound() {
        return "Some generic animal sound.";
    }
}

class Dog extends Animal {
    public function sound() {
        return "Bark";
    }
}


$dog = new Dog("Bulldog");
echo $dog->name . " makes sound: " . $dog->sound(); 