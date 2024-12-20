<?php
echo time();
echo "\n";
echo mktime(0,0,0,20,12,2024)."\n";
date_default_timezone_set('Asia/Dhaka')."\n";
echo mktime(0,0,0,20,12,2024)."\n";
echo gmmktime(0,0,0,20,12,2024)."\n";
echo (1754949600-1754935200)/(60*60);
