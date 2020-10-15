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
Route::view('/ajax', 'ajax')->name('ajax');
Route::post('/toggle', 'HomeController@ajax');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'is_admin']
], function() {
    Route::match(['get','post'], '/profile', 'ProfileController@update')->name('updateProfile');
    Route::resource('/news', 'NewsController')->except(['show']);
    Route::get('/test3', 'IndexController@test2')->name('test2');
    Route::match(['get','post'], '/editUsers', 'EditUsersController@edit')->name('editUsers');
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
    Route::get('/one/{news}', 'NewsController@show')->name('show');
});



Auth::routes();


