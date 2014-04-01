<?php

include_once dirname(__FILE__) . '/../config.php';

/**
 * @class wish_list
 * Create a class for get and manage form data
 *
 * @param wish_id
 * @param description
 * @param amount
 */	
class WishList {
    public $wish_id;
    public $description;
    public $amount;

    public function setWishId($wish_id_form) {
		$this->wish_id = $wish_id_form;
    }

    public function setDescription($description_form) {
		$this->description = $description_form;
    }
	
    public function setAmount($amount_form) {
		$this->amount = $amount_form;
    }
	
	public function addWish() {
		// Connect to the database
		$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Insert the wish
		echo $sql = 'INSERT INTO ' . $connection->database . '.wish_list
				(user_id,
				 name,
				 price)
				VALUES
				("' . htmlentities($_SESSION['user_id']) . '",
				 "' . htmlentities($this->description) . '",
				 "' . htmlentities($this->amount) . '")';
		$return = $connection->runSql($sql);
		
		// Close database connection
		$connection->closeConnection();
		
		return $return;
	}
	
	public function deleteWish() {
		// Connect to the database
		$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Delete the wish
		$sql = 'DELETE FROM ' . $connection->database . '.wish_list
				WHERE wish_list_id = "' . htmlentities($this->wish_id) . '"';
		
		$return = $connection->runSql($sql);
		// Close database connection
		$connection->closeConnection();
		
		return $sql;
	}
	
	public function editWish() {
		// Connect to the database
		$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Edit the budget
		$sql = 'UPDATE ' . $connection->database . '.wish SET
				description = "' . htmlentities($this->description) . '",
				amount = "' . htmlentities($this->amount) . '"
				WHERE wish_list_id = "' . htmlentities($this->wish_list_id) . '"';
		
		$return = $connection->runSql($sql);
		
		// Close database connection
		$connection->closeConnection();
		
		return $return;
	}
}

?>
