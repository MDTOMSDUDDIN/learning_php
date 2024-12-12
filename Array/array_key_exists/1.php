<?php
$array = [
    "name" => "Rahim",
    "age" => 25,
    "city" => "Dhaka"
];

if (array_key_exists("age", $array)) {
    echo "Key  exists in the array."; // Output: Key 'age' exists in the array.
} else {
    echo "Key  does not exist.";
}
