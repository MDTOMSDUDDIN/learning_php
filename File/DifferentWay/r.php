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
$fp=fopen($fileName,'r');
while($student=fgetcsv($fp)){
    // $student=explode("," ,$data);
    printf("name=%s %s\n age=%s \n class=%s \n roll=%s \n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}