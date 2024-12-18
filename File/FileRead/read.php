<?php
$fileName="D:\Learning_php\File\FileRead\page.txt";
$fp=fopen($fileName, 'r');

$line= fgets($fp);          //online reads using fgets() 
echo $line;

$line= fgets($fp);
echo $line;

$line= fgets($fp);
echo $line;

$line= fgets($fp);
echo $line;

$line= fgets($fp);
echo $line;

fclose($fp);

