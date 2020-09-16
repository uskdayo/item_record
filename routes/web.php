<?php

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

//ブログ一覧を表示
Route::get('/', 'BlogController@showList')->name('blogs');

//ブログ詳細を表示
Route::get('/blog/{id}', 'BlogController@showDetail')->name('show');
