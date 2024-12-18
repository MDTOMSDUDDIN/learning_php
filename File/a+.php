<?php
$fileName="D:\Learning_php\File\open.txt";
$fp=fopen($fileName, 'a+');
fwrite($fp,"tomas\n");
rewind($fp);
fwrite($fp,"parvaz\n");
$line=fgets($fp);
echo $line;

fclose($fp);