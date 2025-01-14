<?php
$d1=new DateTime('20 May 2024');
$d2=new DateTime('27 May 2024');
$difference=date_diff($d1,$d2);
echo $difference->format('%');