<?php

namespace App\Http\Controllers\Dash\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\PostRequest;
use App\Services\User\PostService as UserPostService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('Dash/Post/New');
    }

    public function store(PostRequest $request)
    {
        UserPostService::createNew($request);
    }
}
