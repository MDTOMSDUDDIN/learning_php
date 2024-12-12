<?php

$array = [
    "person" => [
        "name" => "Rahim",
        "age" => 30
    ],
    "city" => "Dhaka"
];

if (array_key_exists("city", $array)) {
    echo "Key is exists.";
} else {
    echo "key does not exists";
}
