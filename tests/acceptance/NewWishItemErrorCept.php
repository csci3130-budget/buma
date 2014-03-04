<?php
// New wish - error in item added
$I = new WebGuy($scenario);
$I->wantTo('Error check - new wish added');
$I->amOnPage('/index.php?file=wish_list');

// Looks for Item and Cost categories
$I->see('Item');
$I->see('Cost');

// Fills in test input and test option
$I->fillField('wishItem', 'Laptop');
$I->fillField('itemCost', '1000');

// Update
$I->click('Add Wish');

// Will see below text if test has passed
$I->see('Item added to wish list!');
?>
