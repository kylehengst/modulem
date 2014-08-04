<?php 
$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('view a list components within the test modulem');

$I->amOnPage('/');
$I->click('Modulem');
$I->seeCurrentUrlEquals('/modulem');
$I->seeInCurrentUrl('/modulem');

$I->see('Foo');
$I->see('Bar');