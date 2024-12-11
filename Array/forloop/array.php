<?php

// $fruits = ["Apple", "Banana", "Cherry", "Mango"];

// $count=count($fruits);

// for ($i = 0; $i < $count; $i++) {
//     echo "$i : " . $fruits[$i] . "\n";
// }

$technologies = [
    "Artificial Intelligence",
    "Machine Learning",
    "Data Science",
    "Cloud Computing",
    "Blockchain",
    "Internet of Things",
    "Cybersecurity",
    "Augmented Reality",
    "Virtual Reality",
    "Quantum Computing",
    "5G Technology",
    "DevOps",
    "Big Data",
    "Web Development",
    "Mobile App Development",
    "Edge Computing",
    "Robotics",
    "Natural Language Processing",
    "Game Development",
    "UI/UX Design"
];

$technology=count($technologies);
// print_r($technologies);

for($i=0; $i<$technology; $i++){
    echo $technologies[$i]."<br>";
}

