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
$student=array(
    "fname"=>"rifat",
    "lname"=>"hossan",
    "age"=>18,
    "class"=>11,
    "roll"=>3
);


$data=file($fileName);
print_r($data);
unset($data[1]);
$fp=fopen($fileName,"w");
foreach($data as $line){
    fwrite($fp,$line."\n");

  }

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
$student=array(
    "fname"=>"rifat",
    "lname"=>"hossan",
    "age"=>18,
    "class"=>11,
    "roll"=>3
);


$data=file($fileName);
print_r($data);
unset($data[1]);
$fp=fopen($fileName,"w");
foreach($data as $line){
    fwrite($fp,$line."\n");

  }

>>>>>>> 83d777465cb3d5a49353321dccf6e6dde7ef9934
fclose($fp);