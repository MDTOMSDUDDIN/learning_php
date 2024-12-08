<?php
 
function isEven($n){
    if($n%2==0){
        return true;
    }return false;
}


$x=21;
if(isEven($x)){
    echo "{$x} is a even number ";
}else{
    echo "{$x} is a odd number ";
}