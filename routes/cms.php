<?php

use App\Http\Controllers\Cms\PostController;
use Illuminate\Support\Facades\Route;


Route::get('posts', [PostController::class, 'index']);
