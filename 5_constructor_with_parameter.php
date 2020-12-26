<?php

class Post
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function show()
    {
        echo $this->title;
    }
}

$post = new Post('A new post');
$post->show();

// $post = new Post();
// $post->add('Post title');
// echo $post->show();