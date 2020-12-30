<?php

namespace App;

class Post
{
    public static function readingTime($post)
    {
        $word = str_word_count(strip_tags($post));
        $m = floor($word / 100);
        $est = $m . ' min read' . ($m == 1 ? '' : 's');
        return $est;
    }
}
