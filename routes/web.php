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



// 管理者以上
Route::group(['middleware' => ['auth', 'can:master']], function () {
    Route::resource('user', 'App\Http\Controllers\UserController');
});
// ホスト
Route::group(['middleware' => ['auth', 'can:host']], function () {
});
// 一般ユーザー
Route::group(['middleware' => ['auth', 'can:guest']], function () {
});