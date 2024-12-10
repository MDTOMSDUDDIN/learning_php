<?php 
$name="tomas";

function doSomeThings(){
    // global $name;           //global scope variable 
    // echo $name;

    echo $GLOBALS['name'];

}
doSomeThings();