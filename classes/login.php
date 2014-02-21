<?php

include_once dirname(__FILE__) . '/../config.php';

// Create a class for get and manage form data
class Login {
    public $email;
    public $password;

    public function setEmail($email_form) {
		$this->email = $email_form;
    }

    public function setPassword($password_form) {
		$this->password = $password_form;
    }
	
	public function logUserIn() {
		// Connect to the database
		$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Insert the budget
		$sql = 'SELECT user_id, name
				FROM ' . $connection->database . '.user
				WHERE email = "' . htmlentities($this->email) . '" AND
					  password = "' . htmlentities($this->password) . '"
				LIMIT 1';
		$user_data = $connection->runSqlWithReturn($sql);
		
		// If user exist
		if ($user_data['user_id']) {
			// Store the user into a session
			$_SESSION['user_id'] = $user_data['user_id'];
			$_SESSION['user_name'] = $user_data['name'];
			$_SESSION['email'] = $this->email;
			$_SESSION['password'] = $this->password;
			return true;
		}
		
		// Close database connection
		$connection->closeConnection();
		
		return false;
	}
	
	public function userLogged() {
		if (!isset($_SESSION['user_id']) || ($_SESSION['user_name']) || !isset($_SESSION['email']) || ($_SESSION['password'])) {
			/*echo ' session user_id: ' . $_SESSION['user_id'];
			echo ' session user_name: ' . $_SESSION['user_name'];
			echo ' session email: ' . $_SESSION['email'];
			echo ' session password: ' . $_SESSION['password'];
			echo '<br/><br/>';
			print_r($_SESSION);*/
			//logOutUser();
			echo 1;
		} else {
			//echo 2;
			setEmail($_SESSION['email']);
			setPassword($_SESSION['password']);
			if (!logUserIn()) logOutUser();
		}
		return true;
	}
	
	public function logOutUser() {
		unset($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['email'], $_SESSION['password']);
		header("Location: login");
	}
}

?>
