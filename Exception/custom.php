<?php
class MyExecption extends Exception{}
class NetworkException extends Exception{}

function textExecption(){
    throw new MyExecption();
}

try{
    textExecption();
}catch(NetworkException $e){
    echo "NetworkException catch";
}
catch(MyExecption $e){
    echo "MyExecption catch";
}

