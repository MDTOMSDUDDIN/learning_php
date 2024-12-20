<?php
session_name('app');
session_start([
    'cookie_domain'=>'.st.com',
    'cookie_path'=>"/",
]);

$_SESSION['name']="tomas uddin";

echo $_SESSION['name'];
echo $_SESSION['data'];