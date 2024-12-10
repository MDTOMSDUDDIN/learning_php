<?php

    function userLogin($username ,$password){
       if(username($username)){
        echo "fail your username " ;
       } else if(password($password)){
        echo "fail your password";
       }else if(!matching($username,$password)){
        echo "fail your username and password";
       }else{
        login();
       }
    }

    function username($username){
        if(empty($username)){
            return  true;
        }else{
            return false;
        }
    }
    
    function password($password){
        if(empty($password)){
            return  true;
        }else{
            return false;
        }
    }


    function matching($username,$password){
        if($username=="abc" && $password=="123"){
            return true;
        }else{
            return false ;
        }
    }

    function login(){
        echo "User Login Successfully";
    }

    userLogin("abc" ,"123");