<?php
$veryold=0;
$old=1;
$new=1;

for($i=1; $i<100; $i++){
    echo $veryold." ";
    $old=$new;
    $new=$veryold + $old;
    $veryold=$old;

}