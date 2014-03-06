<?php

include_once dirname(__FILE__) . '/../config.php';

// Create a class for get and manage form data
class Budget {
    public $budget_id;
    public $category_id;
    public $amount;

    /*function __construct() {
        $this->$budget_id = $budget_id;
    }*/

	// Gets and sets
    /*public function getBudgetId() {
        print_r($this);
        return $this->budget_id;
    }

    public function getUserId() {
        print_r($this);
        return $this->user_id;
    }

    public function getCategoryId() {
        print_r($this);
        return $this->category_id;
    }

    public function getAmount() {
        print_r($this);
        return $this->amount;
    }*/
	
    public function setBudgetId($budget_id_form) {
		$this->budget_id = $budget_id_form;
    }
	
    public function setCategoryId($category_id_form) {
		$this->category_id = $category_id_form;
    }
	
    public function setAmount($amount_form) {
		$this->amount = $amount_form;
    }
	
	public function addBudget() {
		// Connect to the database
		$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Insert the budget
		$sql = 'INSERT INTO ' . $connection->database . '.budget
				(category_id,
				 user_id,
				 amount)
				VALUES
				("' . htmlentities($this->category_id) . '",
				 "' . htmlentities($_SESSION['user_id']) . '",
				 "' . htmlentities($this->amount) . '")';
		$return = $connection->runSql($sql);
		// Close database connection
		$connection->closeConnection();
		
		return $return;
	}
	
	public function editBudget() {
		// Connect to the database
		$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Edit the budget
		$sql = 'UPDATE ' . $connection->database . '.budget SET
				category_id = "' . htmlentities($category_id) . '",
				amount = "' . htmlentities($amount) . '"
				category_id = "' . htmlentities($this->category_id) . '",
				amount = "' . htmlentities($this->amount) . '"
				WHERE budget_id = "' . htmlentities($budget_id) . '"';
		
		$return = $connection->runSql($sql);
		// Close database connection
		$connection->closeConnection();
		
		return $return;
	}
	
	public function addCategory($name) {
		// Connect to the database
		$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Check if the category already exist
		$sql = 'SELECT DISTINCT c.category_id
				FROM ' . $connection->database . '.category AS c
				WHERE ' . strtolower($name) . ' = LOWER(c.name)';
		$category = $connection->runSqlWithReturn($sql);
		
		$new_category_id = 0;
		foreach ($category as $k) $new_category_id = $k['category_id'];
		$new_category_id;
		
		if ($new_category_id) {
			// Insert the category in the DB
			$sql = 'INSERT INTO ' . $connection->database . '.category
					(name)
					VALUES
					("' . htmlentities(strtolower($name)) . '")';
			if ($connection->runSql($sql)) $new_category_id = mysql_insert_id();
		}
		
		// Close database connection
		$connection->closeConnection();
		
		return $new_category_id;
	}
}

?>
