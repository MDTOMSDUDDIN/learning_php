<?php
$fileName="D:\Learning_php\File\FilePut\put.txt";

// file_put_contents($fileName,"mars \n",FILE_APPEND);
// file_put_contents($fileName,"Juiters \n",FILE_APPEND);

file_put_contents($fileName,"mars \n", FILE_APPEND | LOCK_EX);
file_put_contents($fileName,"Juiters \n",FILE_APPEND| LOCK_EX);
