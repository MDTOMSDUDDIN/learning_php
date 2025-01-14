<?php
$fileName="D:\Learning_php\File\DifferentWay\way.txt";
$students=array(
    array(
        "fname"=>"tomas",
        "lname"=>"uddin",
        "age"=>19,
        "class"=>12,
        "roll"=>11
    ),
    array(
        "fname"=>"parvez",
        "lname"=>"rohman",
        "age"=>12,
        "class"=>1,
        "roll"=>1
    ),
    array(
        "fname"=>"sabbir",
        "lname"=>"hossan",
        "age"=>18,
        "class"=>11,
        "roll"=>3
    )

);

// $data=serialize($students);
// file_put_contents($fileName,$data);

$dataFormFile=file_get_contents($fileName);
$allstudent=unserialize($dataFormFile);
print_r($allstudent);

unset($allstudent);
$data=serialize($students);
file_put_contents($fileName,$data);