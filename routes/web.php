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

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/about', function () {
    return view('user.about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'UserController@index');
Route::get('/help', 'UserController@help');
Route::get('/pria', 'ProductController@pria');
Route::get('/wanita', 'ProductController@wanita');
Route::get('/anak', 'ProductController@anak');
Route::get('/hasil-pencarian', 'ProductController@search');
Route::get('/belanja/{product}', 'UserController@show');
Route::get('/detail/{tran}', 'ProductController@show');
Route::get('/home/{product}/edit', 'HomeController@edit');
Route::get('/home/tambah', 'HomeController@create');
Route::get('/home/transaksi', 'HomeController@Adminindex');
Route::get('/home/customer', 'HomeController@customer');

Route::post('/help', 'UserController@store');
Route::post('/belanja/{product}', 'TransController@store');
Route::post('/home/tambah', 'HomeController@store');

Route::delete('/{product}', 'HomeController@destroy');
Route::delete('/home/{tran}', 'HomeController@destroyTrans');

Route::patch('/home/{product}/edit', 'HomeController@update');

Route::put('/home/transaksi/{tran}', 'HomeController@updateTrans');
