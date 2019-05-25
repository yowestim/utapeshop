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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home','FrontController@index');

Route::get('/category','FrontController@category' );
Route::post('/category/store', 'CategoryController@store');
Route::get('/category/create', 'CategoryController@create');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::get('/category/delete/{id}', 'CategoryController@delete');
Route::post('/category/update', 'CategoryController@update');

Route::get('/brand','FrontController@brand' );
Route::post('/brand/store', 'BrandController@store');
Route::get('/brand/create', 'BrandController@create');
Route::get('/brand/edit/{id}', 'BrandController@edit');
Route::get('/brand/delete/{id}', 'BrandController@delete');
Route::post('/brand/update', 'BrandController@update');

Route::get('/shoes', 'FrontController@shoes');
