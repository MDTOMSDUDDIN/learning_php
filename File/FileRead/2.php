<?php
$fileName="D:\Learning_php\File\FileRead\page.txt";
$fp=fopen($fileName, 'r');

while ($line = fgets($fp)){
    echo $line;
 }

// rewind($fp);
// fseek($fp,8);
fseek($fp,-1, SEEK_END);

 while ($line =fgets($fp)){
    echo $line."-";
 }

fclose($fp);