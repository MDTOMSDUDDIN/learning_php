<?php
$fruits = ["Apple", "Banana", "Cherry", "Mango", "Grapes"];

$removed = array_splice($fruits, 2, 2);

print_r($fruits); 

print_r($removed);
