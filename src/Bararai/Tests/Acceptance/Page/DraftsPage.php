<?php
namespace Bararai\Tests\Acceptance\Page;

use Bararai\Tests\Acceptance\Object\Post;

class DraftsPage
{
    public static $url = '/?go=drafts/';
    public static $draftUrlTemplate = '/?go=drafts/%s/';
    public static $postIdRegex = '~/?go=drafts/(.+)/$~';

    public static function draftUrl(Post $post)
    {
        return sprintf(self::$draftUrlTemplate, $post->id);
    }
}