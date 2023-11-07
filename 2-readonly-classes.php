<?php

/**
 *  In PHP 8.2, introduced support for readonly classes in PHP.
 *  If you have readonly properties then rremove the
 *  readonly keyword from property and prefix
 *  the readonly keyword before class.
 * 
 * The readonly properties allow you to define properties
 * that can be only initialized once within the class.
 * 
 * readonly properties must have type.
 */
readonly class Blog
{
    public string $title;
    public string $post;
    // public readonly string $title;
    // public readonly string $post;


    // constructor method
    public function __construct(string $title, string $post)
    {
        $this->title = $title;
        $this->post = $post;
    }
}

$blog = new Blog("PHP", "Latest version of PHP 8.2 2023");
// $blog->title = "JAVASCRIPT"; // throw error cannot modify the property as it is read-only.
var_dump($blog);
