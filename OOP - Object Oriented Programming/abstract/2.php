<?php
abstract class Perent{
    final function do(){
        echo "do somethings ";
    }
}

class child extends Perent{
    function do(){
        echo "do somethings ";
    }
}

$obj=new child();
$obj->do();