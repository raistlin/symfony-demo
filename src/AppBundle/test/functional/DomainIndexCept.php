<?php
$I = new AcmeBundle\FunctionalTester($scenario);
$I->wantTo('test domain route');

$I->amOnPage('http://example.com/');
$I->see('DOMAIN example.com');
