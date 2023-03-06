<?php

namespace App\Services\User;

use App\Repositories\PostRepository;

class PostService
{
    public static function createNew(array $post)
    {
        $post = PostRepository::store($post);
    }
}
