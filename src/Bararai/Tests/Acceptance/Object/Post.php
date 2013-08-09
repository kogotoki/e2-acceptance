<?php
namespace Bararai\Tests\Acceptance\Object;

class Post
{
    public $id;
    public $title;
    public $text;

    public static function createWithRandomStrings()
    {
        $post = new self();
        $post->id = null;
        $post->title = bin2hex(openssl_random_pseudo_bytes(6));
        $post->text = bin2hex(openssl_random_pseudo_bytes(12));
        return $post;
    }
}