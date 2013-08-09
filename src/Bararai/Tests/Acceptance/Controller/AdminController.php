<?php
namespace Bararai\Tests\Acceptance\Controller;

use Bararai\Tests\Acceptance\Object\Admin;
use Bararai\Tests\Acceptance\Page\AnyPage;
use Bararai\Tests\Acceptance\Page\HomePage;
use Bararai\Tests\Acceptance\Page\SignInPage;

class AdminController
{
    private $webGuy;

    public function __construct(\WebGuy $webGuy)
    {
        $this->webGuy = $webGuy;
    }

    public function signInOnHomePage()
    {
        $this->webGuy->amOnPage(HomePage::$url);
        $this->signIn();
    }

    public function signIn()
    {
        $I = $this->webGuy;
        $I->click(AnyPage::$signInLink);
        $I->fillField(SignInPage::$passwordField, Admin::$password);
        $I->click(SignInPage::$submitButton);
    }

    public function signOut()
    {
        $I = $this->webGuy;
        $I->click(AnyPage::$signOutLink);
    }
}