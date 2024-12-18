<?php

$fileName="D:\Learning_php\File\FileRead\page.txt";

$data=file($fileName);
print_r($data);

$data=file_get_contents($fileName);
echo $data;
