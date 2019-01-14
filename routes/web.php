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

Route::group(['prefix'=>'backend', 'namespace'=>'Backend', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('backend.index');
    Route::resource('/category', 'CategoryController', ['as'=>'backend']);
    Route::resource('/article', 'ArticleController', ['as'=>'backend']);
    Route::group(['prefix' => 'managment', 'namespace' => 'UserManagment'], function() {
        Route::resource('/user', 'UserController', ['as' => 'backend.managment']);
    });
});

Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');

Route::get('/', function () {
    return view('blog.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
