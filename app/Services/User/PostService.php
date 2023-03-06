<?php

namespace App\Services\User;

use App\Http\Requests\Cms\PostRequest;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;

class PostService
{
    public const USER_DASH_POSTS = 'dash.posts';

    private readonly int $user_id;

    public function __construct(Auth $auth)
    {
        $this->user_id = $auth->id;
    }

    public static function createNew(
        array|PostRequest $post
    ): bool {
        if (PostRepository::store($post)) {
            //log and notification to review post
            return true;
        }

        return false;
    }
}
