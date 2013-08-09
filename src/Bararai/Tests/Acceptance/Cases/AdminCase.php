<?php
namespace Bararai\Tests\Acceptance\Cases;

use Bararai\Tests\Acceptance\Controller\AdminController;
use Bararai\Tests\Acceptance\Page\HomePage;
use Codeception\Scenario;

class AdminCase
{
    private $webGuy;
    private $admin;

    public function __construct(Scenario $scenario)
    {
        $this->webGuy = new \WebGuy($scenario);
        $this->admin = new AdminController($this->webGuy);
    }

    public function testSignIn()
    {
        $I = $this->webGuy;
        $A = $this->admin;

        $I->am('admin');
        $I->wantTo('login to system');
        $I->lookForwardTo('see admin page');

        $I->amOnPage(HomePage::$url);
        $I->dontSee('Sign out');
        $A->signIn();
        $I->seeCurrentUrlEquals(HomePage::$url);
        $I->see('Sign out');
        $A->signOut();
        $I->seeCurrentUrlEquals('/');
        $I->dontSee('Sign out');
    }
}