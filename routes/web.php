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
Route::get('/category','CategoryController@index');

Route::get('/category/store','CategoryController@store');

Route::get('/category/show/{id}','CategoryController@show');

Route::put('/category/{$id}/edit','CategoryController@edit');