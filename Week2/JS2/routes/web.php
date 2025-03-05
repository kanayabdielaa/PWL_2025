<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


Route::get('/', [HomeController::class]);
Route::get('/about', [AboutController::class]);
Route::get('/articles/{id?}', [ArticleController::class]);
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 
    'show'
]);

Route::resource('photos', PhotoController::class) ->except([
    'create', 
    'store', 
    'update', 
    'destroy'
]);
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Kanaya']);
});
Route::get('/greeting', [WelcomeController::class, 'greeting']);