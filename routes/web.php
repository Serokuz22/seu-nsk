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


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

Route::get('/article', [\App\Http\Controllers\ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{slug}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('article.show');

include_once 'pages.php';
