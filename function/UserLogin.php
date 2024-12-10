<?php 
 function UserLogin($username, $password){
    if(validateUser($username)){
        echo "Fail username ?";
    }else if(validatePassword($password)){
        echo "Fail password ";
    }else if(!matching($username,$password)){
        echo "Do not mass you username and password ";
    }else{
        logain();
    }
 }


 function validateUser($username){
    if(empty($username)){
        return true;
    }else{
        return false;
    }
 }

 function validatePassword($password){
    if(empty($password)){
        return true;
    }else{
        return false;
    }
 }

 function matching($username,$password){
    if($username =="tomas" && $password =="123"){
        return true;
    }else{
        return false;
    }
 }

 function logain(){
    echo "user logain successfully ";
 }


 UserLogin ("tomas", "123");