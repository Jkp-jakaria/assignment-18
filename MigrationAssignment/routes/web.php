<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::delete('/posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.delete');
Route::get('/categories/{id}/posts', [PostController::class, 'getPostsByCategory'])->name('categories.posts');
Route::get('/latest-posts', [PostController::class, 'latestPosts'])->name('latest.posts');
