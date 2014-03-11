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

		// Tests to complete:
		// Show wish has been removed from database
		// Show wish has been removed on screen
		// Saved amount changed in database
		// Saved amount changed onscreen
}
