<?php
$I = new WebGuy($scenario);

// Edit wish
$I->wantTo('Edit a wish to change item in wish or amount the item costs');
$I->amOnPage('/index.php?file=wish_list');

// Update
$I->click('edit');

// Changes wish item or item amount
$I->fillField('itemName', 'Laptop');
$I->fillField('inputAmount', '1000');

// Will see 'Information updated' if test has passed
$I->see('Information updated');
?>
