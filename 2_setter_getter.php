<?php

class Post
{
    public $title;

    public function add($title)
    {
        $this->title = $title;
    }

    public function show()
    {
        return $this->title;
    }
}

$post = new Post();
$post->add('Post title');
echo $post->show();