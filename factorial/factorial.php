<?php

 function factorial($n) {
        if ($n == 0) {
            return 1; 
        } else {
            return $n * factorial($n - 1);
        }
    }

echo "Factorial value " . factorial(4); 


//----------------- for loop using --------------

function factorials($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i ; 
    }
    return $result;
}

echo "number ar factorial  " . factorials(0); 
?>
