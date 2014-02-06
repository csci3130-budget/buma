<?php

//include_once dirname(__FILE__) . '/classes/database.php';

// Database data
/*$db_type = '';
$db_host = '';
$db_user = '';
$db_pass = '';
$db_name = '';*/

/*
System variables:
*/

// Get the get and post
$p = $_POST;
$g = $_GET;
// Current page
$file = isset($p['file']) ? $p['file'] : (isset($g['file']) ? $g['file'] : 'login');

?>