<?php
session_name('myapp');
session_start([
    'cookie_lifetime'=>20
]);

$_SESSION['name']='Tomas Uddin';
echo $_SESSION['name'];

// session_destroy();