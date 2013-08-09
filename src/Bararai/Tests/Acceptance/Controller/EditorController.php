<?php
namespace Bararai\Tests\Acceptance\Controller;

use Bararai\Tests\Acceptance\Object\Admin;
use Bararai\Tests\Acceptance\Object\Post;
use Bararai\Tests\Acceptance\Page\AnyPage;
use Bararai\Tests\Acceptance\Page\DraftsPage;
use Bararai\Tests\Acceptance\Page\SignInPage;

class EditorController
{
    private $webGuy;

    public function __construct(\WebGuy $webGuy)
    {
        $this->webGuy = $webGuy;
    }

    public function createRandomPost()
    {
        $post = Post::createWithRandomStrings();
        $this->createNewPost($post);
        return $post;
    }

    public function createNewPost(Post $post)
    {
        $I = $this->webGuy;

        $I->click('New');
        $I->seeInCurrentUrl('new');
        $I->see('New post', 'h2');

        $I->fillField('title', $post->title);
        $I->fillField('text', $post->text);
        $I->click('Save and preview');
        $post->id = $I->grabFromCurrentUrl(DraftsPage::$postIdRegex);
    }

    public function publishPost(Post $post)
    {
        $I = $this->webGuy;

        $I->amOnPage(DraftsPage::draftUrl($post));
        $I->click('Publish the post');
    }
}


















