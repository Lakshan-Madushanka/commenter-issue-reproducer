<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'post' => Post::query()->first(),
    ]);
});
