<?php

$fileName="D:\Learning_php\File\FileRead\page.txt";

if(is_readable($fileName)){

$data=file($fileName);
print_r($data);

$data=file_get_contents($fileName);
echo $data;

}