<?php

include_once dirname(__FILE__) . '/../config.php';
include_once dirname(__FILE__) . '/classes/budget.php';

// Get the data from the form
$budget_id = isset($p['budget_id']) ? $p['budget_id'] : (isset($g['budget_id']) ? $g['budget_id'] : '');
//$user_id = isset($p['user_id']) ? $p['user_id'] : (isset($g['user_id']) ? $g['user_id'] : '');
$category_id = isset($p['category_id']) ? $p['category_id'] : (isset($g['category_id']) ? $g['category_id'] : '');
$amount = isset($p['amount']) ? $p['amount'] : (isset($g['amount']) ? $g['amount'] : '');

// Intantiate class
$budget = new Budget;

if ($budget_id) $budget->setBudgetId($budget_id);
$budget->setUserId($user_id);
$budget->setCategoryId($category_id);
$budget->setAmount($amount);

if (!$budget_id) {
	$budget->addBudget();
	echo "Budget added.";
}
else {
	$budget->editBucket();
	echo "Budget edited.";
}

?>
