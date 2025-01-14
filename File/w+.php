<<<<<<< HEAD
<?php
$fileName="D:\Learning_php\File\open.txt";
$fp=fopen($fileName, 'w+');
fwrite($fp,"tomas\n");
rewind($fp);
$line=fgets($fp);
echo $line;

=======
<?php
$fileName="D:\Learning_php\File\open.txt";
$fp=fopen($fileName, 'w+');
fwrite($fp,"tomas\n");
rewind($fp);
$line=fgets($fp);
echo $line;

>>>>>>> 83d777465cb3d5a49353321dccf6e6dde7ef9934
fclose($fp);