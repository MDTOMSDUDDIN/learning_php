<?php

class ParentClass{
   public $name="tomas uddin";
   function __construct(){
    $this->name;
     
   }

    
}

class Child extends ParentClass{

    function hello(){
        echo "hello php language ";
    }
}

$obj=new Child();
// echo $obj->name;
$obj->hello();
