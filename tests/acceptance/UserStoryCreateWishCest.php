<?php
use \WebGuy;

class UserStoryCreateWishCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

		// Add new wish successfully
		public function addWishSuccess($I) {
		
		}
		
		// New wish - error in item added
		public function itemError($I) {
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
		}
	
		// New wish - error in value
		public function valueError($I) {
				$I->wantTo('Error check - new wish added');
				$I->amOnPage('/index.php?file=wish_list');

				// Looks for Item and Cost categories
				$I->see('Item');
				$I->see('Cost');

				// Fills in test input and test option
				$I->fillField('wishItem', 'Laptop');
				$I->fillField('itemCost', '@#%^1000');

				// Update
				$I->click('Add Wish');

				// Will see below text if test has passed
				$I->see('Item cost is not valid - please enter your price as an integer (ex: 100)');
		}
}
