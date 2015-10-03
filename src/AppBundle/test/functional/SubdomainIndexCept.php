<?php
$I = new AcmeBundle\FunctionalTester($scenario);
$I->wantTo('test subdomain route');

$I->amOnPage('http://test.example.com');
$I->see('SUBDOMAIN: test');
