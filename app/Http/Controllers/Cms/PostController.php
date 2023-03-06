<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('/Pages/Cms/Index', []);
    }
}
