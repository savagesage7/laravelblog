<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CommentsController;

Route::get('/users', function (){
    return 'Welcome To The Users Page';
});

Route::get('/',[PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Route::post('/posts/{post}/comments', [CommentsController::class, 'store']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

