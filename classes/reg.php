<?php
include_once dirname(__FILE__) . '/../config.php';

if(!isset($_POST['submit'])){
	exit('Error! Please resubmit the form');
}



//set up email vaildation for email if the browser do not have vaildation
$email = $_POST['email'];
if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)){
	exit('Error about email format<a href="javascript:history.back(-1);">return</a>');
}

//Set up variable that need to be register into datatbase.
class register {
	public $userid;
	public $username;
	public $password;
	public $email;
	public $regdate;
	
    public function setUserid($userid_form) {
		$this->user_id = $userid_form;
    }
	
	public function setUsername($username_form) {
		$this->username = $username_form;
    }
	
	public function setPassword($password_form) {
		$this->password = $password_form;
    }
	
	 public function setEmail($email_form) {
		$this->email = $email_form;
    }
	 public function setDate() {
		$this->date = date();
	}
/*$userid = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];*/	
	public function register() {
		//connect to database
		$connection = new createConnection();
		$connection->connectToDatabase();
	
		//check if the username exist
		$sql = 'SELECT user_id
				FROM ' . $connection->database . '.user
				WHERE email = "' . htmlentities($this->email) . '" AND
					  name = "' . htmlentities($this->username) . '"
				LIMIT 1';
		$user_data = $connection->runSqlWithReturn($sql);
		
		// If user exist
		if ($user_data['user_id'])
		{
			echo 'Error£ºUser id ',$user_data['user_id'],' already exist! <a href="javascript:history.back(-1);">return</a>';
			exit;
		}
		//if(mysql_fetch_array($check_query)){}
		
		//insert the code
		$this->password =MD5($this->password);
		//$password = MD5($password);
		
		$sql = 'INSERT INTO ' . $connection->database . '.user
				(user_id,
				 name,
				 password,
				 email)
				 VALUES
				 ("' . htmlentities($this->userid) . '",
				  "' . htmlentities($this->username) . '",
				  "' . htmlentities($this->password) . '",
				  "' . htmlentities($this->email) . '")';
				 
		if(mysql_query($sql,$connection->database))
			{
			exit('Register successfully! Cilck here to <a href="login.php">Login</a>');
			} 
			else 
			{
			echo 'Sorry,fail to register',mysql_error(),'<br />';
			echo 'Cilck here to <a href="javascript:history.back(-1);">return</a>';
			}
		
		$return = $connection->runSql($sql);
		// Close database connection
		$connection->closeConnection();
		return $return . $sql;
	}
   }
?>
