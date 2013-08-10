<?php
namespace Bararai\Tests\Acceptance\Page;

use Bararai\Tests\Acceptance\Object\Post;

class EditDraftPage
{
    public static $urlTemplate = '/?go=drafts/%s/';
    public static $postIdRegex = '~/?go=drafts/(.+)/$~';
    public static $publishButton = 'Publish the post';

    public static function url(Post $post)
    {
        return sprintf(self::$urlTemplate, $post->id);
    }
}