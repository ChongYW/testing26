<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('post', 'PostController@create')->name('post.create');
Route::get('post', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');

//Route::post('post', 'PostController@store')->name('post.store');
Route::post('post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

//Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');

//Route::get('/article/{post:slug}', 'PostController@show')->name('post.show');
Route::get('/article/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');

//Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');

//Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
Route::post('/reply/store', [App\Http\Controllers\CommentController::class, 'replyStore'])->name('reply.add');
