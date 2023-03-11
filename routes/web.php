<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;


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

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/faq', [FAQController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);

Route::get('/blog', [ArticlesController::class, 'index']);
Route::get('/blog/create', [ArticlesController::class, 'create']);
Route::post('/blog', [ArticlesController::class, 'store']);
Route::get('/blog/{post}', [ArticlesController::class, 'show']);
Route::get('/blog/{post}/edit', [ArticlesController::class, 'edit']);
Route::put('/blog/{post}', [ArticlesController::class, 'update']);
