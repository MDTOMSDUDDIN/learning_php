<?php

$originalArray = [1, 2, 3];
$referenceArray = &$originalArray; // রেফারেন্স কপি


$referenceArray[0] = 100;

print_r($originalArray);   // আসল অ্যারেও পরিবর্তন হবে
print_r($referenceArray);  // রেফারেন্স অ্যারেও পরিবর্তন হবে
