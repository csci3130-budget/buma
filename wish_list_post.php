<?php

include_once dirname(__FILE__) . '/../config.php';
include_once dirname(__FILE__) . '/classes/wish_list.php';

// Get the data from the form
$wish_list_id = isset($p['wish_list_id']) ? $p['wish_list_id'] : (isset($g['wish_list_id']) ? $g['wish_list_id'] : 0);
$action = isset($p['action']) ? $p['action'] : (isset($g['action']) ? $g['action'] : 'insert');
$amount = isset($p['amount']) ? $p['amount'] : (isset($g['amount']) ? $g['amount'] : '');
$description = isset($p['description']) ? $p['description'] : (isset($g['description']) ? $g['description'] : '');

// Intantiate class
$wish = new WishList;

if ($action == 'insert') {
	$wish->setDescription($description);
	$wish->setAmount($amount);
	
	if ($result = $wish->addWish()) echo "Wish added.";
	else echo "An internal error occurred. " . $result;
} else if  ($action == 'edit') {
	$wish->setWishId($wish_list_id);
	$wish->setDescription($description);
	$wish->setAmount($amount);
	
	if ($result = $wish->editWish()) echo "Wish edited.";
	else echo "An internal error occurred. " . $result;
} else if  ($action == 'delete') {
	$wish->setWishId($wish_list_id);
	
	if ($result = $wish->deleteWish()) echo "Wish deleted.";
	else echo "An internal error occurred. " . $result;
}

?>