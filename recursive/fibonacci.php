<?php
function fibonacci($old,$new,$start,$end){
    static $start;
    $start=$start ?? 0 ;
    if($start > $end){
        return;
    }
    $start ++ ;

    echo $old."\n";
    $_temp=$old +$new;
    $old=$new;
    $new=$_temp;


    fibonacci($old,$new,$start,$end);
}
fibonacci(0,1,1,10);