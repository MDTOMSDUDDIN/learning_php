<?php

class Human{
   public $name="tomas";

   function Info(){
    echo"My name is {$this->name}";
   }
}

$obj=new Human();

// echo $obj->name;
$obj->Info();



class MyClass {
    public static $staticVar = 'Hello, World!';

    public static function displayStaticVar() {
        echo self::$staticVar;
    }
}

MyClass::displayStaticVar();  // Output: Hello, World!
