<?php 

 $fileName="D:\Learning_php\File\FileWrite\add.txt";
if(is_writable($fileName)){
 $existingData=file_get_contents($fileName);
 $fp=fopen($fileName, "w");


 fwrite($fp,$existingData);
 fwrite($fp,"book\n");
 fwrite($fp,"pen\n");
 fwrite($fp,"drive\n");
 fclose($fp);

}