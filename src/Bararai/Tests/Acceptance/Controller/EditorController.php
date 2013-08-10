<?php
namespace Bararai\Tests\Acceptance\Controller;

use Bararai\Tests\Acceptance\Object\Admin;
use Bararai\Tests\Acceptance\Object\Post;
use Bararai\Tests\Acceptance\Page\AnyPage;
use Bararai\Tests\Acceptance\Page\DeletePostPage;
use Bararai\Tests\Acceptance\Page\DraftsPage;
use Bararai\Tests\Acceptance\Page\EditDraftPage;
use Bararai\Tests\Acceptance\Page\EditPostPage;
use Bararai\Tests\Acceptance\Page\NewPostPage;
use Bararai\Tests\Acceptance\Page\PostPage;
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

        $I->click(AnyPage::$newPostLink);
        $I->seeCurrentUrlEquals(NewPostPage::$url);
        $I->fillField(NewPostPage::$titleField, $post->title);
        $I->fillField(NewPostPage::$textField, $post->text);
        $I->click(NewPostPage::$saveButton);
        $post->id = $I->grabFromCurrentUrl(EditDraftPage::$postIdRegex);
    }

    public function publishPost(Post $post)
    {
        $I = $this->webGuy;

        $I->amOnPage(EditDraftPage::url($post));
        $I->click(EditDraftPage::$publishButton);
    }

    public function deletePost($post)
    {
        $I = $this->webGuy;

        $I->amOnPage(PostPage::url($post));
        $I->click(PostPage::$editLink);
        $I->click(EditPostPage::$deleteButton);
        $I->click(DeletePostPage::$deleteButton);
    }
}


















