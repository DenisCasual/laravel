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
Route::view('/about', 'about')->name('about');
Route::view('/vue', 'vue')->name('vue');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function() {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/test1', 'IndexController@test1')->name('addnews');
    Route::get('/test2', 'IndexController@test2')->name('test2');
});

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function() {
    Route::group([
        'as' => 'category.'
    ], function () {
        Route::get('/categories', 'CategoryController@index')->name('index');
        Route::get('/category/{slug}', 'CategoryController@show')->name('show');
    });

    Route::get('/', 'NewsController@index')->name('index');
    Route::get('/one/{id}', 'NewsController@show')->name('show');
});





Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');




Route::get('/home', 'HomeController@index')->name('home');
