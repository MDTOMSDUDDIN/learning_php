<?php

class ParentClass {
    public function sayHello() {
        echo "Hello from Parent Class!\n";
    }
}

class ChildClass extends ParentClass {

    public function sayHello() {
        parent::sayHello();
    }
    
}

$child = new ChildClass();
$child->sayHello();

