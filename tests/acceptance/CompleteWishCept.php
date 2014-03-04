<?php
$I = new WebGuy($scenario);

// Complete an item on wish list
$I->wantTo('Complete item on wish list');
$I->amOnPage('/index.php?file=wish_list');

// Complete code
$I->click('completeWish');

// Will see the below text if test has passed
$I->see('Your wish has been granted! Congrats!');
?>
