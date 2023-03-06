<?php

namespace App\Http\Controllers\Dash\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\PostRequest;
use App\Services\User\PostService as UserPostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    }

    public function store(PostRequest $request)
    {
        UserPostService::createNew($request);
    }
}
