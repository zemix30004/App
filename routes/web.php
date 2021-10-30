<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [PostController::class, 'index'])->name('tasks.index');
Route::get('/', [StartController::class, 'index'])->name('index');
Route::get('/books', [StartController::class, 'books'])->name('books');
Route::get('/categories', [StartController::class, 'categories'])->name('categories');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('users', UserController::class);
    // Route::get('/users', [UserController::class, 'index']);
    // Route::get('/users/create', [UserController::class, 'create']);
    // Route::post('/users/store', [UserController::class, 'store']);
    // Route::get('/users/{id}/edit', [UserController::class, 'edit']);
    // Route::post('/users/{id}/update', [UserController::class, 'update']);
    // Route::post('/users/{id}/delete', [UserController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
