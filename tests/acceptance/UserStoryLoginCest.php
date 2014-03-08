<?php
use \WebGuy;

class UserStoryLoginCest
{

				public function _before()
				{
				}

				public function _after()
				{
				}

				// Check if user can see login page
				public function welcome($I) {
								$I->wantTo('ensure that frontpage works');
								$I->amOnPage('login/');
								$I->see('Welcome');
				}

				// Login with valid information
				public function validInformation($I) {
				// tests
				/*public function tryToTest(WebGuy $I) {
								$this->validInformation($I);
								$this->welcome($I);
								$this->logoutSuccess($I);
				}*/

								$I->wantTo('Login with a correct username and password');

								// Should default to centi.cs.dal.ca/group11/buma
								$I->amOnPage('');

								// We already have an account created with this username and password
								// So we expected this test to pass
								$I->fillField('email', 'test');
								$I->fillField('password', 'test');

								$I->click('Log in');
								$I->amOnPage('/home');

								// If we don't see Log in, then we are logged in and the test has passed 
								$I->sendAjaxGetRequest('/refresh');
								$I->dontSee('Log in');
				}

				// Login with wrong password
				public function incorrectPassword($I) {

				}

				// Login with wrong username
				public function incorrectUsername($I) {

				}

				// Logout if user is logged in
			 	public function logoutSuccess($I) {
								$I->wantTo('Logout of BUMA successfully');
								$I->amOnPage('');

								// Should default to centi.cs.dal.ca/group11/buma
								$I->see('Welcome to BUBA');

								// We already have an account created with this username and password
								// So we expected this test to pass
								$I->fillField('email', 'test');
								$I->fillField('password', 'test');

								$I->click('Log in');
								$I->amOnPage('/home');

								// If we don't see Log in, then we are logged in and the test has passed 
								$I->sendAjaxGetRequest('home');
								$I->dontSee('Log in');
								$I->click('Logout');
				}
}
