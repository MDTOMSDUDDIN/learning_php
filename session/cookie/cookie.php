<?php

// setcookie("username","tomas",time()+20);
setcookie("username","tomas",time()+20,'/');
setcookie("username","tomas",1);     //cookie delete 
echo $_COOKIE['username'];