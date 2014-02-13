<?php

include_once dirname(__FILE__) . '/classes/connection.php';

// Get the get and post
$p = $_POST;
$g = $_GET;

// Current page
$file = isset($p['file']) ? $p['file'] : (isset($g['file']) ? $g['file'] : 'login');

//include_once dirname(__FILE__) . '/classes/login.php';

// Intantiate class
//$login = new Login;

// Test if the user is logged
//$logged = $login->userLogged()

$user_id = 0;
$user_name = "";

?>
