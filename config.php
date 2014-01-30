<?php

// Database data
$db_type = '';
$db_host = '';
$db_user = '';
$db_pass = '';
$db_name = '';

// Get the get and post
$p = $_POST;
$g = $_GET;

// Current page
echo ' file: ';
echo $file = isset($p['file']) ? $p['file'] : (isset($g['file']) ? $g['file'] : 'login');

?>