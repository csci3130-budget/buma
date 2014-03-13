<?php
use \WebGuy;

class UserStoryEditWishCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

		// Edit wish - user is successful
		public function editWishSuccessful($I) {
				$I->wantTo('Edit a wish to change item in wish or amount the item costs');
				$I->amOnPage('/index.php?file=wish_list');

				// Update
				$I->click('edit');

				// Changes wish item or item amount
				$I->fillField('itemName', 'Laptop');
				$I->fillField('inputAmount', '1000');

				// Will see 'Information updated' if test has passed
				$I->see('Information updated');
		}
		
		// Error message if item has already been added to wishlist
		public function editWishItemDouble($I) {
				$I->wantTo('Edit a wish but try to add an item that already exists');
				$I->amOnPage('/index.php?file=wish_list');

				// Add wish first time
				$I->click('new');
				// Changes wish item or item amount
				$I->fillField('itemName', 'Laptop');
				$I->fillField('inputAmount', '1000');
				$I->click('add');
				
				// Add new item
				$I->click('new');
				// Changes wish item or item amount
				$I->fillField('itemName', 'Stuff');
				$I->fillField('inputAmount', '100');
				$I->click('add');
				
				// Edit
				$I->click('edit');
				// Changes wish item or item amount
				$I->fillField('itemName', 'Laptop');
				$I->fillField('inputAmount', '1000');

				// Will see 'Information updated' if test has passed
				$I->see('Error: cannot ask for same wish twice');
		}

		// Value error
		public function editWishValueError($I) {
				$I->wantTo('Edit a wish but try to enter a non-numerical value');
				$I->amOnPage('/index.php?file=wish_list');

				// Update
				$I->click('edit');

				// Changes wish item or item amount
				$I->fillField('itemName', 'Laptop');
				$I->fillField('inputAmount', 'Laptop');

				// Will see 'Information updated' if test has passed
				$I->see('Error: amount field must be a number');
		}

}
