<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


register_shutdown_function('fatalErrorHandler');

function fatalErrorHandler()
{

    $error = error_get_last();


    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {

        error_log("Fatal Error: " . $error['message'] . " in " . $error['file'] . " on line " . $error['line']);


        echo "A fatal error occurred. Please try again later.";
    }
}


undefinedFunction();
