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
$fp=fopen($fileName,'w');

// foreach($students as $student){
// $data=sprintf("%s, %s, %s, %s, %s, \n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll'],);
// fwrite($fp,$data);
// }

foreach($students as $student){
    
    fputcsv($fp,$student);      //fputcsv file write function

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
$fp=fopen($fileName,'w');

// foreach($students as $student){
// $data=sprintf("%s, %s, %s, %s, %s, \n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll'],);
// fwrite($fp,$data);
// }

foreach($students as $student){
    
    fputcsv($fp,$student);      //fputcsv file write function

>>>>>>> 83d777465cb3d5a49353321dccf6e6dde7ef9934
    }