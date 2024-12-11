<?php
$user = [
    "name" => "John Doe",
    "email" => "john@example.com",
    "age" => 30,
    "gender" => "Male"
];

unset($user["email"], $user["gender"]);

print_r($user);
