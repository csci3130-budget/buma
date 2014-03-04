<?php
include_once dirname(__FILE__) . '/../config.php';


if(!isset($_POST['submit'])){
	exit('Error please resubmit your information!');
}
$userid = $_post['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)){
	exit('Error about email format<a href="javascript:history.back(-1);">return</a>');
}


public function registeruser() {
		$connection = new createConnection();
		$connection->connectToDatabase();
	
	$check_query = mysql_query("select user_id from user where name='$username' limit 1");
		if(mysql_fetch_array($check_query))
		{
			echo 'Error£ºUser id ',$userid,' already exist! <a href="javascript:history.back(-1);">return</a>';
			exit;
		}
	//Ð´ÈëÊý¾Ý
		$password = MD5($password);
		$sql = "INSERT INTO user(user_id,name,password,email)VALUES('$userid','$username','$password','$email')";
	if(mysql_query($sql,$connection))
	{
			exit('Register successfully! Cilck here to <a href="login.php">Login</a>');
		} 
		else 
		{
			echo 'Sorry,fail to register',mysql_error(),'<br />';
			echo 'Cilck here to <a href="javascript:history.back(-1);">return</a>';
		}
	}
?>
