<?php
class Car{
    public static $name="bmw";

  static  function band(){
        echo "BMW is a best car ";
    }
}

 echo Car::$name;
echo "</br>";
 Car::band();