<?php

namespace App\Repositories;

use App\Http\Requests\Cms\PostRequest;
use App\Models\Cms\Post;

class PostRepository
{
    public static function getFeaturedPosts()
    {
        return Post::paginate(10);
    }

    public static function store(array|PostRequest $data)
    {
        return Post::create($data);
    }
}
