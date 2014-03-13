<?php

include_once dirname(__FILE__) . '/../config.php';
include_once dirname(__FILE__) . '/classes/login.php';
    setcookie('email', $_POST['email'], time()+ 31536000);
    echo($_COOKIE['email']);
    setcookie('password', $_POST['password'], time()+ 31536000);
    echo($_COOKIE['password']);

?>