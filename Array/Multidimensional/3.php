<?php

$students = [
    ["name" => "Rahim", "age" => 20],
    ["name" => "Karim", "age" => 22]
];

foreach ($students as $student) {
    echo  $student["name"] , $student["age"] . "</br>";
}
