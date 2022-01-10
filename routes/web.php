<?php

use App\Http\Controllers\ContactController;//追記
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

// お問い合わせ入力ページ
//Route::get('/', 'ContactController@index')->name('contact');

// 確認ページ
//Route::post('/confirm', 'ContactController@confirm')->name('confirm');

// DB挿入、メール送信
//Route::post('/process', 'ContactController@process')->name('process');

// 完了ページ
//Route::get('/complete', 'ContactController@complete')->name('complete');

Route::get('/inquiry', 'App\Http\Controllers\ContactController@show')->name('inquiry');
Route::post('/inquiry/confirm', 'App\Http\Controllers\ContactController@confirm');
Route::post('/inquiry/finish', 'App\Http\Controllers\ContactController@finish');