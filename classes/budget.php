<?php

include_once dirname(__FILE__) . '/../config.php';

// Create a class for get and manage form data
class Budget {
    public $budget_id;
    public $user_id;
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
	
    public function setUserId($user_id_form) {
		$this->user_id = $user_id_form;
    }
	
    public function setCategoryId($category_id_form) {
		$this->category_id = $category_id_form;
    }
	
    public function setAmount($amount_id_form) {
		$this->amount_id = $amount_id_form;
    }
	
	public function addBudget() {
		// Connect to the database
		/*$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Insert the budget
		/*$sql = 'INSERT INTO budget
				(user_id,
				 category_id,
				 amount)
				VALUES
				("' . htmlentities($user_id) . '",
				 "' . htmlentities($category_id) . '",
				 "' . htmlentities($amount) . '")';
		$return = $connection->runSql($sql);
		// Close database connection
		$connection->closeConnection();*/
		
		return $return = 0;
	}
	
	public function editBudget() {
		// Connect to the database
		$connection = new createConnection();
		$connection->connectToDatabase();
		
		// Edit the budget
		$sql = 'UPDATE budget SET
				user_id = "' . htmlentities($user_id) . '",
				category_id = "' . htmlentities($category_id) . '",
				amount = "' . htmlentities($amount) . '"
				WHERE budget_id = "' . htmlentities($budget_id) . '"';
		
		$return = $connection->runSql($sql);
		// Close database connection
		$connection->closeConnection();
		
		return $return;
	}
}

?>