<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// Default route bawaan create project laravel
Route::get('/', function () {
    return view('welcome');
});

// Jobsheet 2 Praktikum 2

// URL : /, HomeController : index
Route::get('/', [HomeController::class, 'index']);

// URL : /about, AboutController : about
Route::get('/about', [AboutController::class, 'about']);

// URL : /articles/{id}, ArticleController : articles
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
