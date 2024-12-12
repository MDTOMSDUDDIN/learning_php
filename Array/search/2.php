<?php

$array = ["apple", "banana", "cherry"];
$key = array_search("apple", $array);

if ($key === false) {
    echo "Value not found!";
} else {
    echo "Value found at index: $key";
}
