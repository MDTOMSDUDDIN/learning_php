<?php

register_shutdown_function('fatal_error_handler');

function  fatal_error_handler(){
    $error=error_get_last();
    if($error){
        //do somethings
        echo "Fatal Errors";
    }
}

no function();