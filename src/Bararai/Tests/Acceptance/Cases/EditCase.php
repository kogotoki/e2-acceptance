<?php
namespace Bararai\Tests\Acceptance\Cases;

use Bararai\Tests\Acceptance\Controller\AdminController;
use Bararai\Tests\Acceptance\Controller\EditorController;
use Bararai\Tests\Acceptance\Object\Post;
use Bararai\Tests\Acceptance\Page\DraftsPage;
use Bararai\Tests\Acceptance\Page\HomePage;
use Codeception\Scenario;

class EditCase
{
    private $webGuy;
    private $admin;

    public function __construct(Scenario $scenario)
    {
        $this->webGuy = new \WebGuy($scenario);
        $this->admin = new AdminController($this->webGuy);
        $this->editor = new EditorController($this->webGuy);
    }

    public function testWriteDraft()
    {
        $I = $this->webGuy;
        $A = $this->admin;
        $E = $this->editor;

        $I->am('admin');
        $I->wantTo('write but not publish post');

        $A->signInOnHomePage();
        $post = $E->createRandomPost();

        $this->assertPostInDrafts($post);
        $this->assertPostNotVisibleToGuests($post);
    }

    public function testPublishPost()
    {
        $I = $this->webGuy;
        $A = $this->admin;
        $E = $this->editor;

        $I->am('admin');
        $I->wantTo('write and publish post');

        $A->signInOnHomePage();
        $post = $E->createRandomPost();
        $E->publishPost($post);

        $this->assertPostNotInDrafts($post);
        $this->assertPostVisibleToGuests($post);
    }

    private function assertPostInDrafts(Post $post)
    {
        $I = $this->webGuy;
        $I->amOnPage(DraftsPage::$url);
        $I->seeLink($post->title);
    }

    private function assertPostNotInDrafts(Post $post)
    {
        $I = $this->webGuy;
        $I->amOnPage(DraftsPage::$url);
        $I->dontSeeLink($post->title);
    }

    private function assertPostNotVisibleToGuests(Post $post)
    {
        $I = $this->webGuy;
        $A = $this->admin;

        $A->signOut();
        $I->amOnPage(HomePage::$url);
        $I->dontSee($post->title);
    }

    private function assertPostVisibleToGuests(Post $post)
    {
        $I = $this->webGuy;
        $A = $this->admin;

        $A->signOut();
        $I->amOnPage(HomePage::$url);
        $I->see($post->title);
    }

}