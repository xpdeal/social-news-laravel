<?php

namespace App\Services\User;

use App\Http\Requests\Cms\PostRequest;
use App\Repositories\PostRepository;

class PostService
{
    public static function createNew(array|PostRequest $post)
    {
        return PostRepository::store($post);
    }
}
