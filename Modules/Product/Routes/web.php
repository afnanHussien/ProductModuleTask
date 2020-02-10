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

Route::namespace('Frontend')->prefix('frontend')->group(function() {
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});

Route::get('/', 'Frontend\CategoryController@index');
Route::get('/frontend', 'Frontend\CategoryController@index');


