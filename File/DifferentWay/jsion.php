<<<<<<< HEAD
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

// $jsonencode=json_encode($students);
// file_put_contents($fileName,$jsonencode);


$data=file_get_contents($fileName);
$decode=json_decode($data);  //object pass
// $decode=json_decode($data,true);  //array pass
print_r($decode);

=======
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

// $jsonencode=json_encode($students);
// file_put_contents($fileName,$jsonencode);


$data=file_get_contents($fileName);
$decode=json_decode($data);  //object pass
// $decode=json_decode($data,true);  //array pass
print_r($decode);

>>>>>>> 83d777465cb3d5a49353321dccf6e6dde7ef9934
