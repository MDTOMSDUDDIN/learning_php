<?php 

 $fileName="D:\Learning_php\File\FileWrite\add.txt";

 $fp=fopen($fileName, 'w');
 fwrite($fp,"book\n");
 fwrite($fp,"book\n");
 fwrite($fp,"book\n");
 fwrite($fp,"book\n");
 fclose($fp);