<?php
// AddBudget
$I = new WebGuy($scenario);
$I->wantTo('Add a new budget');
$I->amOnPage('/index.php?file=add_budget');

// Looks for Amount and Category labels
$I->see('Amount');
$I->see('Category');

// Fills in test input and test option
$I->fillField('inputAmount', '100');
$I->selectOption('inputCategory', 'Clothing');

// Update
$I->click('Add');

// Will see 'Budget added' if test has passed
$I->see('Budget added');
?>
