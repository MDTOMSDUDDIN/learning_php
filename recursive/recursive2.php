<?php 

function printNumber($start, $end){
    if($start >= $end){
        return ;
    }

    echo $start ."\n"; 
    $start++ ;
    printNumber($start,$end);
}
printNumber(10,30);