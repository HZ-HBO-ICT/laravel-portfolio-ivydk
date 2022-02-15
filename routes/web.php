<?php

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

// post page
Route::get('/posts/{post}', [\App\Http\Controllers\PostsController::class, 'show']);

// welcome page
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'show']);

// profile page
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'show']);

// blog page
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'show']);

// dashboard page
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'show']);

// faq page
Route::get('/FAQ', [\App\Http\Controllers\FAQController::class, 'show']);

// BLOG POSTS
Route::get('/blog/{slug}', [\App\Http\Controllers\BlogPostsController::class, 'show']);

// article page
Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'show']);

// ARTICLES
Route::get('/articles/{articleID}', [\App\Http\Controllers\ArticlesController::class, 'show']);
