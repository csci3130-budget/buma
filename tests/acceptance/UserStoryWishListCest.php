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

		// View all wishes ** NEEDS TO BE COMPLETED
		public function viewWishes($I) {
				LoginCest::login($I);	
				$I->wantTo('View all wishes on list');
				$I->amOnPage('wish_list');

				$I->see('Wish');
		}

		// Show amount saved
		public function showAmountSaved($I) {
				LoginCest::login($I);	
				$I->wantTo('Show amount saved on screen');
				$I->amOnPage('wish_list');

				// If test passes, we should see "Saved:"
				$I->see('Saved:');
		}
		
}
