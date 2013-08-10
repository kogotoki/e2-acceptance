<?php
namespace Bararai\Tests\Acceptance\Page;

use Bararai\Tests\Acceptance\Object\Post;

class PostPage
{
    public static $urlTemplate = '/?go=all/%s/';
    public static $editLink = '.main-content h1 a[href$="/edit/"]';

    public static function url(Post $post)
    {
        return sprintf(self::$urlTemplate, $post->id);
    }
}