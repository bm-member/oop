<?php

class Post
{
    public function __construct()
    {
        echo "I am constructor<br>";
    }

    public function __destruct()
    {
        echo "I am destructor<br>";
    }

    public function show()
    {
        echo 'First Post <br>';
    }

}

$post = new Post();
$post->show();