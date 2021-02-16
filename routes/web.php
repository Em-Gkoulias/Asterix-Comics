<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
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

Auth::routes(['verify' => true]);

Route::get('/comics', [ComicController::class, 'index']);
Route::get('/comics/create', [ComicController::class, 'create']);
Route::post('/comics', [ComicController::class, 'store']);
Route::get('comics/{comic}/edit', [ComicController::class, 'edit']);
Route::put('comics/{comic}', [ComicController::class, 'update']);
Route::get('/comics/{comic}', [ComicController::class, 'show']);

Route::get('/profiles/{profile}', [ProfileController::class, 'index']);
Route::put('profiles/{profile}', [ProfileController::class, 'update']);
Route::get('/profiles/{profile}/edit' , [ProfileController::class, 'edit']);

Route::post('/comics/{comic}', [CommentController::class, 'store']);

Route::get('/contact', function() {
    return view('contact');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
