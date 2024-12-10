<?php           //pass by refference 

// function increment(&$number) {
//     $number++;
// }
// $num = 5;
// increment($num);
// echo $num;  

function factorial($n) {            //recursive function 
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo factorial(5);  


// // --------------------
// $sum = function($a, $b) {           //অ্যানোনিমাস ফাংশন Anonymous function 
//     return $a + $b;
// };
// echo $sum(3, 4);  

// //--------break statement------------------
// for($i = 1; $i <= 10; $i++) {       
//     if($i == 5) {
//         break; 
//     }
//     echo "value: $i <br>";
// }

//--------continue statement ------------------
for($i = 1; $i <= 10; $i++) {
    if($i == 5) {
        continue;  // continue statement 
    }
    echo "value: $i <br>";
}
