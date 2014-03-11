<?php
use \WebGuy;

class UserStoryWishListCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

		public function showAmountSaved($I) {

		}

		// View all wishes ** NEEDS TO BE COMPLETED
		public function viewWishes($I) {
				$I->wantTo('View all wishes on list');
				$I->amOnPage('/index.php?file=wish_list');

				$I->see('Wish');
		}

		// TESTS TO COMPLETE:
		// Show amount saved
		
}
