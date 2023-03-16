<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;

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

// Profile Routes
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');

// Post Routes
Route::get('/post/create', [PostsController::class, 'createPost']);
Route::get('/post/{post}', [PostsController::class, 'showPost']);
Route::post('/post', [PostsController::class, 'storePost']);