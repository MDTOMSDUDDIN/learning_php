<?php
$fileName="D:\Learning_php\File\open.txt";
$fp=fopen($fileName, 'w+');
fwrite($fp,"tomas\n");
rewind($fp);
$line=fgets($fp);
echo $line;

fclose($fp);