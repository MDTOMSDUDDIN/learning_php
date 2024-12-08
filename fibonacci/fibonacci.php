<?php

$very_old=0;
$old=1;
$new=1;

for($i=0; $i<10; $i++){
    echo $very_old ." ";
    $old=$new;
    $new=$very_old+$old;
    $very_old=$new;
}