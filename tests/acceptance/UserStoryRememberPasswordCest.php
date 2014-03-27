<?php
use \WebGuy;

class UserStoryRememberPasswordCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

		/* A test to check that when the remember me checkbox is selected, 
		 * the username and password should be remembered
		 */
		public function rememberMePass ($I) {
			$I->amOnPage('login');
			$I->click('#login_form > label > input');
			
				// Fill in info
				// Logout
				// See results
		}

		/* A test to check that when the remember me checkbox is not selected, 
		 * the username and password should NOT be remembered
		 */
		public function rememberMeFail ($I) {
			
			$I->amOnPage('login');
				// Fill in info
				// Logout
				// See results
		}
}
