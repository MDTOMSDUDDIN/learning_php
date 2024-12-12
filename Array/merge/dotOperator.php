<?php
$array1 = ["apple", "banana"];
$array2 = ["orange", "grape"];
$array3 = ["mango"];

$result = [...$array1, ...$array2, ...$array3];

print_r($result);

