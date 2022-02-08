<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

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
Route::get('/posts/{post}', [PostsController::class, 'show']);

// welcome page
Route::get('welcome', [\App\Http\Controllers\WelcomeController::class, 'show']);

// profile page
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'show']);

// blog page
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'show']);

// dashboard page
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'show']);

// faq page
Route::get('/FAQ', [\App\Http\Controllers\FAQController::class, 'show']);


