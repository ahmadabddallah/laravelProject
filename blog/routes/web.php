<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/posts',[PostsController::class ,'index'])->name('posts.index');
// Route::get ('/posts/{posts}',function(){
//     return $posts;
// });


Route::get ('/posts/create',[PostsController::class,'create'])->name('posts.create');

Route::get('/posts/{post}',[PostsController::class,'show'])->name('posts.show');
// Route::get ('/posts/{post}',[PostsController::class,'show']);

