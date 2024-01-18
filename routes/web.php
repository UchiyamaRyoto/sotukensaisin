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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test' , [App\Http\Controllers\Test\QuizTextController::class, 'index'])->name('test.index');
Route::post('/test' , [App\Http\Controllers\Test\QuizTextController::class, 'store'])->name('test.store');

Route::get('/test2' , [App\Http\Controllers\Test\testIchiranController::class, 'index'])->name('test2.index');

Route::get('/password/change', [App\Http\Controllers\Auth\ChangePasswordController::class,'showChangePasswordForm'])->name('password.form');
Route::post('/password/change', [App\Http\Controllers\Auth\ChangePasswordController::class,'ChangePassword'])->name('password.change');