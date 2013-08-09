<?php
/** @var $scenario Codeception\Scenario */
$case = new \Bararai\Tests\Acceptance\Cases\EditCase($scenario);
$case->testWriteDraft();

//// publish
//$I->seeInCurrentUrl('drafts');
//$I->see('Best blog engine ever');
//$I->see('It is e2, of course :-)');
//$I->click('Publish the post');
//
//// edit
//$I->seeInCurrentUrl('all');
//$I->see('Best blog engine ever');
//$I->see('It is e2, of course :-)');
//$I->see('Just published');
//$I->click("h1.published a[href$='/edit/']");
//
//// delete
//$I->click('Delete...');
//$I->click('Delete');