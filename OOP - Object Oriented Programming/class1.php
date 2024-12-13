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