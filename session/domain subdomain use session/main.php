<?php
session_name('app');
session_start([
    'cookie_domain'=>'.st.com',
    'cookie_path'=>"/",
]);

$_SESSION['data']="Hello Hello ";
echo $_SESSION['data'];


echo $_SESSION['name'];