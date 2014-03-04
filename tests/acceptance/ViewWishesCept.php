<?php
// View all wishes
$I = new WebGuy($scenario);
$I->wantTo('View all wishes on list');
$I->amOnPage('/index.php?file=wish_list');

// Will see 'Wish removed' if test has passed'
$I->see('Wish');
?>
