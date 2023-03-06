<?php

namespace App\Services\User;

use App\Http\Requests\Cms\PostRequest;
use App\Repositories\PostRepository;

class PostService
{

    public const USER_DASH_POSTS = 'dash.posts';
    public static function createNew(array|PostRequest $post)
    {
        if (PostRepository::store($post)) {
            //log and notification to review post
        }
    }
}
