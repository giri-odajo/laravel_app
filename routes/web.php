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

Route::get('/', function () { //Laravelのスタートメニューを表示している
    return view('welcome');
});
Route::resource('todo', 'TodoController');
Auth::routes(); //Authで追加

Route::get('/home', 'HomeController@index')->name('home'); //Authで追加
