<?php
use \WebGuy;

class UserStoryAddExpenseCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

    // tests
    public function tryToTest(WebGuy $I) {
    		$I->wantTo('Add new expense');
		$I->amOnPage('add_expense');

		//Look for Amount and Category labels
		$I->see('Amount');
		$I->see('Budget');

		// Fills in test input and test option
		$I->fillField('inputAmount', '100');
		$I->selectOption('inputCategory', 'Clothing');

		// Update
		$I->click('Add');

		// Will see 'Expense added' if test has passed
		$I->see('Expense added');
    }

}