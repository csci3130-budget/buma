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
		$sql = 'SELECT "id", "name"
				FROM "user"
				WHERE "user" = "' . htmlentities($user_id) . '" AND
					  "password" = "' . htmlentities($user_id) . '"
				LIMIT 1';
		$user_logged = $connection->runSql($sql);
		
		// Close database connection
		$connection->closeConnection();
		
		// If user exist
		if ($return['id']) {
			// Store the user into a session
			$_SESSION['user_id'] = $user_logged['id'];
			$_SESSION['user_name'] = $user_logged['name'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			return true;
		}
		
		return false;
	}
	
	public function userLogged() {
		if (!isset($_SESSION['user_id']) || ($_SESSION['user_name']) || !isset($_SESSION['email']) || ($_SESSION['password'])) {
			logOutUser();
		} else {
			setEmail($_SESSION['email']);
			setPassword($_SESSION['password']);
			if (!logUserIn()) logOutUser();
		}
	}
	
	public function logOutUser() {
		unset($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['email'], $_SESSION['password']);
		header("Location: login");
	}
}

?>
