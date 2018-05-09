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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/article', 'HomeController@detail');

Auth::routes();


Route::middleware(['web', 'guest'])->prefix('admin')->get('/login', function(){
    return view('login');
});

Route::middleware(['web', 'session.guest'])->prefix('admin')->group(function(){
    Route::get('/article/lists', 'Admin\ArticleController@lists')->name('lists');
    Route::get('/article/add', 'Admin\ArticleController@add')->name('article-add');
    Route::post('/article/save', 'Admin\ArticleController@save')->name('article-save');
    Route::get('/article/detail', 'Admin\ArticleController@detail')->name('detail');
    Route::get('/article/category', 'Admin\ArticleController@category')->name('category');
    Route::get('/article/category-list', 'Admin\ArticleController@categoryList')->name('category-list');
    Route::post('/article/category-save', 'Admin\ArticleController@categorySave')->name('category-save');
});