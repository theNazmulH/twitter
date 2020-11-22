<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'showHome'])->name('home');
Route::post('/',[HomeController::class, 'postTweet']);
Route::get('/profile',[HomeController::class, 'showProfile'])->name('showProfile');
Route::get('/tweet/{id}',[HomeController::class, 'showTweetByID'])->name('tweetID');
Route::post('/tweet/{id}',[HomeController::class, 'updateTweet']);
Route::get('/tweet/{id}/delete',[HomeController::class, 'deleteTweet'])->name('tweetID.delete');
