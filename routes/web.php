<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Tweet\Update\PutController;
use App\Http\Controllers\Tweet\DeleteController;
use App\Http\Controllers\Auth\RegisteredUserController; // New import statement

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// New register routes
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');
Route::get('/tweet', [IndexController::class, 'a'])->name('tweet.index');
Route::get('/tweet/create', '\App\Http\Controllers\Tweet\CreateController@b')->name('tweet.create');

Route::get('/tweet/{tweetId}/edit', '\App\Http\Controllers\Tweet\Update\IndexController')
->name('tweet.update.index')
->where('tweetId', '[0-9]+');

Route::put('/tweet/{tweetId}', '\App\Http\Controllers\Tweet\Update\PutController@d')
    ->name('tweet.update.put')
    ->where('tweetId', '[0-9]+');

Route::delete('/tweet/delete/{tweetId}', [DeleteController::class, 'e'])
    ->name('tweet.delete');


    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');
    
require __DIR__.'/auth.php';

