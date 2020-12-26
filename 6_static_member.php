<?php

class Post
{
    public static $title = "Post One";

    public static function show()
    {
        echo "Post show";
    }
}

echo Post::$title;
Post::show();