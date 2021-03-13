<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommantaireController;
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



Route::get('/', [ ArticleController::class, 'index']);




Route::get('admins', [AdminsController::class, 'listAdmin']);

Route::resource('articles', ArticleController::class);

Route::get('like/{id}', [ArticleController::class, 'add_like'])->name('add_like');

Route::get('unlike/{id}', [ArticleController::class, 'unlike'])->name('unlike');

Route::resource('commantaires', CommantaireController::class);


















