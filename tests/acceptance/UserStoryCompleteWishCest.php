<?php
use \WebGuy;

class UserStoryCompleteWishCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

		// Complete an item on wish list if user has saved enough money
		public function completeWishSuccess($I) {
				$I->wantTo('Complete item on wish list');
				$I->amOnPage('/index.php?file=wish_list');

				// Complete code
				$I->click('completeWish');

				// Will see the below text if test has passed
				$I->see('Your wish has been granted! Congrats!');
		}
		
		// Provides an error when user has not saved enough money
		public function completeWishFail($I) {
				$I->wantTo('Complete item on wish list');
				$I->amOnPage('/index.php?file=wish_list');

				// Complete code
				$I->click('completeWish');

				// Will see the below text if test has passed
				$I->see('Sorry, you have not saved enough money yet.');
		}
		
		//Show wish has been removed on screen.
		public function completeWishRemoved($I) {
				$I->wantTo('Remove Wish from page after completion');
				$I->amOnpage('/index.php?file=wish_list');
                                $I->see('Item');
				$I->see('Value');
				//create item for wishlist
				$I->fillField('Item', 'Playstation');
				$I->fillField('Value', '400');
				
                                $I->click('Add');
				//Confirm item has been added
				$I->see('Playstation');
				$I->click(''); //Click X button to remove item
				$I->click('Ok');//Confirm removal 
				$I->dontsee('Playstation')//Confirm item has been removed
 		}
		
		//incomplete 
		public function completeAmountChanged($I) {
				$I->wantTo('Check if the saved value is updated');
				$I->amOnpage('/index.php?file=wish_list');
   				
				$I->see('Saved: '); 
				//Amount is added to savings ....
				//Should changed saved value
				//Check Saved value for appropriate changes. 
		}
		
		// Tests to complete:
		// Show wish has been removed from database
		// Saved amount changed in database
		// Saved amount changed onscreen -- in progress
