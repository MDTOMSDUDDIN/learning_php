<?php
$array1 = ["Apple", "Banana", "Cherry"];
$array2 = ["Banana", "Cherry", "Grapes"];
$array3 = ["Banana", "Grapes", "Orange"];

//  $result = array_intersect($array1, $array2, $array3);  //common element seclect new array 

$result = array_diff($array1, $array2, $array3); 

print_r($result);
