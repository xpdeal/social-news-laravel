<?php

use App\Http\Controllers\Cms\PostController;
use App\Http\Controllers\Dash\Cms\PostController as DashPostController;
use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::class, 'index']);

// só para testes
Route::get('new-post', [DashPostController::class, 'index'])->name('dash.posts');
Route::post('new-post', [DashPostController::class, 'store'])->name('cms.post.store');
