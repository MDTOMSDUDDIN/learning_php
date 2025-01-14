<?php
class Student{
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name=$name;
        if($age<4){
            throw new Exception("Invalid age",1000);
        }elseif($age>35){
            throw new Exception("too old ",1002);
        }
        $this->age=$age;
    }
}


try{
    $s=new Student('tomas',39);
    echo "true return ";
}
catch(Exception $e){
    echo $e->getCode().":".$e->getMessage();
}


// finally{
//     echo "finally exception throw";
// }