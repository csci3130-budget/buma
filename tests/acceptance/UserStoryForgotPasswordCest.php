<?php
use \WebGuy;

class UserStoryForgotPasswordCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

		public function invalidEmail($I) {
							$I->wantTo('Fail to find the password with an invalid Email address');
							//Should be default to centi.cs.dal.ca/group11/buma
							$I->amOnPage('');
							
							//Click the Forget Password on the log in page
							$I->click('Forget Password');
							//After the user click the button, there should be place for them to enter the username(email)
							$I->fillField('email','1234');
							//Click the button to confirm the username
							$I->click('confirm');

							//As the username(email) is an incorrect one, the user should got an error messgae
							//and stay in the forget password paget
							$I->see('Forget Password');
							$I->see('Invalid username!');

							
		}

		public function validEmail($I) {
							$I->wantTo('Find the password using a valid Email(username)');
							//Should be default to centi.cs.dal.ca/group11/bume
							$I->amOnPaget('');
				
						//Click the Forget Password on the log in page
							$I->click('Forget Password');
							//After the user click the button, there should be a place for them to enter the username(email)
							$I->fillField('email','test');
							//Click the buttone to cofirm the username
							$I->click('confirm');
	
							//As the username(email) is a correct ont, the user should get their password back
							$I->see('test');

		}

}