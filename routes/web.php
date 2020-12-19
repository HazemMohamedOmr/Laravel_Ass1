<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// myRoutes

Route::get('/posts', [PostController::class, 'posts']);
Route::get('/posts/show/{id}', [PostController::class, 'show']);

Route::post('/posts/handleSearch', [PostController::class, 'handleSearch'])->name('search.handle');
Route::get('/posts/search/{keyword}', [PostController::class, 'search'])->name('search');

Route::post('/posts/handelLatest', [PostController::class, 'handelLatest'])->name('posts.handle');
Route::get('/posts/latest/{num}', [PostController::class, 'latest'])->name("latest");

Route::get('/tags', [TagController::class, 'tags']);
