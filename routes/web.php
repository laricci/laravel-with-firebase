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

Route::get('/', function () {
    return view('home');
});

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/add', [App\Http\Controllers\UserController::class, 'add'])->name('user.add');
Route::get('/user/{id}/delete', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{id}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::post('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');

Route::get('/entry/{id}', [App\Http\Controllers\EntryController::class, 'index'])->name('entry.index');
Route::get('/entry/{id}/{tipo}/create', [App\Http\Controllers\EntryController::class, 'create'])->name('entry.create');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user','fireauth');

// // Route::get('/home/customer', [App\Http\Controllers\HomeController::class, 'customer'])->middleware('user','fireauth');

// Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

// Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

// Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user','fireauth');

// Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);
