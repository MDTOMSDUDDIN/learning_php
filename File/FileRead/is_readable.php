<<<<<<< HEAD
<?php

$fileName="D:\Learning_php\File\FileRead\page.txt";

if(is_readable($fileName)){

$data=file($fileName);
print_r($data);

$data=file_get_contents($fileName);
echo $data;

=======
<?php

$fileName="D:\Learning_php\File\FileRead\page.txt";

if(is_readable($fileName)){

$data=file($fileName);
print_r($data);

$data=file_get_contents($fileName);
echo $data;

>>>>>>> 83d777465cb3d5a49353321dccf6e6dde7ef9934
}