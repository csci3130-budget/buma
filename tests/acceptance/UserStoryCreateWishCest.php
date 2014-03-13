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
		
		// New wish - error in item added ***NEED TO FINISH
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
		
		//Item error (item already in wish list)
		public function duplicateError($I) {
				$I->wantTo('Error check - duplicate wishes')
				$I->amOnPage('/index.php?file=wish_list');
				
				//Look for Iteam, and Value
				$I->see('Item');
				$I->see('Value');
				
				//Fill in fields with rest items
				$I->fillField('Item', 'test item');
				$I->fillField('Value', '100');
				
				//Update
				$I->click('Add');
				
				//Confirm item was added.
				$I->see('Item added to wish list!');
				
				//Fill in fields with duplicate item
				$I->fillField('Item', 'test item');
				$I->fillField('Value', '100');
				
				//Update
				$I->click('Add');
				
				//Make sure error message appeared.
				$I->see('Duplicate item, wish rejected.');
		}
		// TESTS TO COMPLETE
		// Success message if item added to wishlist
		// Show item added in database
}  
