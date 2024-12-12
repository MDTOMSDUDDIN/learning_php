<?php

$array1 = ["color" => "red", "size" => "large"];
$array2 = ["color" => "blue", "shape" => "circle"];

$result = array_merge_recursive($array1, $array2);

print_r($result);
