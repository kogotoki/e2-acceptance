<?php
namespace Bararai\Tests\Acceptance\Page;

use Bararai\Tests\Acceptance\Object\Post;

class EditPostPage
{
    public static $urlTemplate = '/?go=all/%s/edit';
    public static $deleteButton = "Delete...";

    public static function url(Post $post)
    {
        return sprintf(self::$urlTemplate, $post->id);
    }
}