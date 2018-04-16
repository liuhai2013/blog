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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['web'])->get('/login', function(){
    return view('login');
});
Route::middleware(['web', 'session.guest'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/article/lists', 'Admin\ArticleController@lists')->name('lists');
    Route::get('/article/add', 'Admin\ArticleController@add')->name('add');
    Route::post('/article/save', 'Admin\ArticleController@save')->name('save');
    Route::get('/article/detail', 'Admin\ArticleController@detail')->name('detail');
});