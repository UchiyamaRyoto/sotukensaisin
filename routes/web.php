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

Route::get('/home', [App\Http\Controllers\Test\testIchiranController::class, 'index2'])->name('home');

Route::get('/test' , [App\Http\Controllers\Test\QuizTextController::class, 'index'])->name('test.index');
Route::post('/test' , [App\Http\Controllers\Test\QuizTextController::class, 'store'])->name('test.store');

Route::get('/test2' , [App\Http\Controllers\Test\testIchiranController::class, 'index'])->name('test2.index');

Route::get('/setting/password', [App\Http\Controllers\Auth\ChangePasswordController::class,'showChangePasswordForm'])->name('password.form');
Route::post('/setting/password', [App\Http\Controllers\Auth\ChangePasswordController::class,'changePassword'])->name('password.change');

Route::get('/setting/deactive', [App\Http\Controllers\Auth\DeactiveController::class,'showDeactiveForm'])->name('deactive.form');
Route::post('/setting/deactive', [App\Http\Controllers\Auth\DeactiveController::class,'deactive'])->name('deactive');

Route::get('/setting', [App\Http\Controllers\SettingController::class,'index'])->name('setting');

Route::get('/setting/name', [App\Http\Controllers\SettingController::class,'showChangeNameForm'])->name('name.form');
Route::post('/setting/name', [App\Http\Controllers\SettingController::class,'changeName'])->name('name.change');

Route::get('/setting/email', [App\Http\Controllers\SettingController::class,'showChangeEmailForm'])->name('email.form');
Route::post('/setting/email', [App\Http\Controllers\SettingController::class,'changeEmail'])->name('email.change');

Route::get('/test3' , [App\Http\Controllers\Test\testIchiranController::class, 'index2'])->name('test2.index2');
Route::get('/testQuiz', function () {return view('test/testQuiz');})->name('example.route');

//テストで追加。消していい
Route::get('/testTuika' , function () {return view('test/testTuika');})->name('testTuika');
Route::get('/test4' , function () {return view('test/testCheckScore');});