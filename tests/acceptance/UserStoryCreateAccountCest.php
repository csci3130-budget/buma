<?php
use \WebGuy;

class UserStoryCreateAccountCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

		public function invalidPassword($I) {
							$I->amOnPage('');
							//Click the Create New Account on the log in page to creat a new account in BUMA
							$I->click('Create New Account');
							//A new web page should appeared, user can see the register buttoun on that page 
							$I->sendAjaxGetRequest('/refresh');
							$I->see('Register');
							
							//Enter the inforamtion
							//For this test, we need to enter an invalid password to fail the registeration
							$I->fillField('email','test1');
							$I->fillField('name','test1');
							$I->fillField('password','');
							$I->fillField('repass','');

							//The user can not create the account with an invalid password
							//and stay in the create new account page and see an error message
							$I->see('Register');
							$I->see('Invalid email or password');
		}

		public function invalidUsername($I) {

                                                        $I->amOnPage('');
                                                        //Click the Create New Account on the log in page to creat a new account in BUMA
                                                        $I->click('Create New Account');
                                                        //A new web page should appeared, user can see the register buttoun on that page
                                                        $I->sendAjaxGetRequest('/refresh');
                                                        $I->see('Register');

                                                        //Enter the inforamtion
                                                        //For this test, we need to enter an invalid username to fail the registeration
                                                        $I->fillField('email','');
                                                        $I->fillField('name','');
                                                        $I->fillField('password','test1');
                                                        $I->fillField('repass','test1');

                                                        //The user can not create the account with an invalid password
                                                        //and stay in the create new account page and see an error message
                                                        $I->see('Register');
                                                        $I->see('Invalid email or password');
					       	} 

	       public function validInformation($I) {
					}
}
