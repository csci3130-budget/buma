<?php
// Delete Wish
$I = new WebGuy($scenario);
$I->wantTo('Remove wish');
$I->amOnPage('/index.php?file=wish_list');

// Update
$I->click('delete');
$I->click('Ok');

// Will see 'Wish removed' if test has passed'
$I->see('Wish removed');
?>
