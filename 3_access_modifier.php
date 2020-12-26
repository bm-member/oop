<?php

class Post
{
    private $title;
    protected $body;

    public function add($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    public function show()
    {
        return $this->title . ' ' . $this->body;
    }
}

$post = new Post();
$post->add('Post title', 'Post Body');
echo $post->show();