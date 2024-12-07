<?php 

$mark=22;

if($mark <=100 && $mark>=80){
    echo "A+";
}elseif($mark < 79 && $mark >=70){
    echo "A-";
}
elseif($mark < 69 && $mark >=60){
    echo "A";
}elseif($mark < 69 && $mark >=50){
    echo "B";
}elseif($mark < 49 && $mark >=40){
    echo "B+";

}elseif($mark < 39 && $mark >=33){
    echo "D";
}else{
    echo "F";
}