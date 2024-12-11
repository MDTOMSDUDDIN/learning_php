<?php
$numbers = [10, 20, 30, 40, 50];

$first = array_shift($numbers);
$last = array_pop($numbers);

print_r($numbers);

echo "First Removed: $first"."<br>";
echo " Last Removed: $last";
