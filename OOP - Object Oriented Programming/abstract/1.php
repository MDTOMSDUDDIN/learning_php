<?php

abstract class MyClass{

    public function hello(){
        echo "Hello World!";
    }
}

class AnotherClass extends MyClass {
    
}

$item = new AnotherClass();
$item->hello();
