<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/posts',[PostsController::class ,'index']);
