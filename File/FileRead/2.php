<<<<<<< HEAD
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

=======
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

>>>>>>> 83d777465cb3d5a49353321dccf6e6dde7ef9934
fclose($fp);