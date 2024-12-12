<?php

$originalArray = [1, 2, 3];
$copiedArray = $originalArray;

$copiedArray[0] = 100;

print_r($originalArray); // আসল অ্যারে অপরিবর্তিত থাকবে
print_r($copiedArray);   // শুধুমাত্র কপিকৃত অ্যারে পরিবর্তিত হবে
