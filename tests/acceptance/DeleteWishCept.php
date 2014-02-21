<?php
// Delete Wish
$I = new WebGuy($scenario);
$I->wantTo('Remove wish');
$I->amOnPage('/index.php?file=add_budget');

// Update
$I->click('Add');
$I->click('Ok');

$I->see('Wish removed.');
?>
