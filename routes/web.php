<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;


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

Route::get('/blog', [BlogPostController::class, "index"]);

Route::get('/blog/create', [BlogPostController::class, "create"]);

Route::get('/blog/{blogPost}', [BlogPostController::class, "show"]);

Route::post('/blog/create', [BlogPostController::class, "store"]);

