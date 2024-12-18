<?php
$fileName="D:\Learning_php\File\open.txt";
$fp=fopen($fileName, 'r+');
$line=fgets($fp);
echo $line;

fwrite($fp,"tomas\n");
$line=fgets($fp);
echo $line;

fclose($fp);