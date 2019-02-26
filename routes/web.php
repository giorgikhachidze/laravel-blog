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
    return view('blog.index');
});

Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');

Route::prefix('backend')->name('backend.')->namespace('Backend')->middleware(['auth'])->group(function(){
    Route::get('/', 'DashboardController@dashboard')->name('dashboard');

    Route::resource('/category', 'CategoryController');
    Route::resource('/article', 'ArticleController');

    Route::prefix('managment')->name('managment.')->namespace('Managment')->group(function() {
        Route::resource('/user', 'UserController');
    });
});


Auth::routes();

Route::get('/register', function () {
    Auth::logout();
    return redirect()->intended('404');
})->name('register');
