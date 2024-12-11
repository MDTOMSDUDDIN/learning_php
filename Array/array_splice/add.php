<?php
$fruits = ["Apple", "Banana", "Cherry", "Mango", "Grapes"];

print_r($fruits);


// array_splice($fruits, -2, 1, ["Pineapple", "Orange"]);
array_splice($fruits, 2, 0, ["Pineapple", "Orange"]);
print_r($fruits);
