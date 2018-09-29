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
Route::get('/category','CategoryController@index')->name('categories.index');

Route::get('/category/create','CategoryController@create')->name('categories.create');

Route::post('/category/store','CategoryController@store')->name('categories.store');

Route::get('/category/{category}/edit','CategoryController@edit')->name('categories.edit');

Route::put('/category/{category}','CategoryController@update')->name('categories.update');

Route::get('/category/show/{id}','CategoryController@show')->name('categories.show');

Route::delete('/category/{id}','CategoryController@destroy')->name('categories.destroy');



Route::get('/posts','PostController@index')->name('posts.index');

Route::get('/posts/show/{post}','PostController@show')->name('posts.show');

Route::get('/posts/create','PostController@create')->name('posts.create');

Route::post('/posts/store','PostController@store')->name('posts.store');

Route::get('/posts/{posts}/edit','PostController@edit')->name('posts.edit');

Route::put('/posts/{posts}','PostController@update')->name('posts.update');

Route::delete('/posts/{id}','PostController@destroy')->name('posts.destroy');

