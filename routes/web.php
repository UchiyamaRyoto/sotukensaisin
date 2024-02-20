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

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/testichiran', [App\Http\Controllers\Test\testIchiranController::class, 'index2'])->name('test2');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\Test\testIchiranController::class, 'index2'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test' , [App\Http\Controllers\Test\QuizTextController::class, 'index'])->name('test.index');
Route::post('/test' , [App\Http\Controllers\Test\QuizTextController::class, 'store'])->name('test.store');

Route::get('/test2' , [App\Http\Controllers\Test\testIchiranController::class, 'index'])->name('test2.index');

Route::get('/Question_Register', [App\Http\Controllers\Question_RegisterController::class, 'showQuestion_Register'])->name('Question_Register');

Route::get('/Sentence_Register', [App\Http\Controllers\Question_RegisterController::class,'showSentence_Register'])->name('Sentence_Register');




//Route::get('/test3' funnction(){return view('test4')});
Route::get('/setting/password', [App\Http\Controllers\Auth\ChangePasswordController::class,'showChangePasswordForm'])->name('password.form');
Route::post('/setting/password', [App\Http\Controllers\Auth\ChangePasswordController::class,'changePassword'])->name('password.change');

Route::get('/setting/deactive', [App\Http\Controllers\Auth\DeactiveController::class,'showDeactiveForm'])->name('deactive.form');
Route::post('/setting/deactive', [App\Http\Controllers\Auth\DeactiveController::class,'deactive'])->name('deactive');

Route::get('/setting', [App\Http\Controllers\SettingController::class,'index'])->name('setting');
Route::post('/setting', [App\Http\Controllers\SettingController::class,'index'])->name('setting');

Route::get('/setting/name', [App\Http\Controllers\SettingController::class,'showChangeNameForm'])->name('name.form');
Route::post('/setting/name', [App\Http\Controllers\SettingController::class,'changeName'])->name('name.change');

Route::get('/setting/email', [App\Http\Controllers\SettingController::class,'showChangeEmailForm'])->name('email.form');
Route::post('/setting/email', [App\Http\Controllers\SettingController::class,'changeEmail'])->name('email.change');

Route::get('/test3' , [App\Http\Controllers\Test\testIchiranController::class, 'index2'])->name('test2.index2');
Route::get('/testQuiz', function () {return view('test/testQuiz');})->name('example.route');

//テストで追加。消していい
Route::get('/testTuika' , function () {return view('test/testTuika');})->name('testTuika');

//内山　問題から結果への遷移
Route::get('/testKekka' , [App\Http\Controllers\KekkaController::class, 'index'])->name('kekka');
Route::get('/test3' , [App\Http\Controllers\Test\testIchiranController::class, 'index2'])->name('test3');
Route::get('/test4' , function () {return view('test/testCheckScore');})->name('test4');

Route::get('/adminer', function () {
    abort(404);
});

//内山　ユーザー問題追加画面への遷移
Route::get('/otherTop', function () { return view('other/otherTop');})->name('otherTop');

//内山　結果画面への遷移
Route::get('/testKekka2' , function () {return view('test/testKekka');})->name('testKekka2');

//内山　Oauth関係
Route::get('/', [App\Http\Controllers\TopsController::class, 'index']);
Route::get('/login/new', [App\Http\Controllers\Auth\LoginController::class, 'newly'])->name('newly');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'create'])->name('OAuthcreate');
Route::get('/tops', [App\Http\Controllers\TopsController::class, 'top']);
Route::get('/login/google', [App\Http\Controllers\OAuthLoginController::class, 'authGoogleCallback'])->name('OauthLogin');

//内山　画像アップロード関係
Route::get('/createGazou', [App\Http\Controllers\GazouController::class, 'create'])->name('gazou.create');
Route::get('/storeGazou', [App\Http\Controllers\GazouController::class, 'store'])->name('gazou.store');

//内山　問題設定画面への遷移
Route::get('/questionSetting', function () {return view('Question_Setting');})->name('questionSetting');