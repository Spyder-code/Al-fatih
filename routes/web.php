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

Route::get('/home', 'HomeController@laporan');
Route::get('/', ['middleware' => 'access-log', 'uses' => 'UserController@index']);
Route::get('/help', 'UserController@help');
Route::get('/pria', 'ProductController@pria');
Route::get('/wanita', 'ProductController@wanita');
Route::get('/anak', 'ProductController@anak');
Route::get('/kulit', 'ProductController@kulit');
Route::get('/mitasi', 'ProductController@mitasi');
Route::get('/pvc', 'ProductController@pvc');
Route::get('/smile', 'ProductController@smile');
Route::get('/tpr', 'ProductController@tpr');
Route::get('/matis', 'ProductController@matis');
Route::get('/wadges', 'ProductController@wadges');
Route::get('/hasil-pencarian', 'ProductController@search');
Route::get('/belanja/{product}', 'UserController@show');
Route::get('/detail/{tran}', 'ProductController@show');
Route::get('/home/{product}/edit', 'HomeController@edit');
Route::get('/home/tambah', 'HomeController@create');
Route::get('/home/transaksi', 'HomeController@Adminindex');
Route::get('/home/customer', 'HomeController@customer');
Route::get('/home/product', 'HomeController@index');
Route::get('/home/cari', 'HomeController@cari');
Route::get('/home/detail/{product}', 'HomeController@detail');

Route::post('/help', 'UserController@store');
Route::post('/belanja/{product}', 'TransController@store');
Route::post('/home/tambah', 'HomeController@store');

Route::delete('/{product}', 'HomeController@destroy');
Route::delete('/home/{tran}', 'HomeController@destroyTrans');

Route::patch('/home/{product}/edit', 'HomeController@update');

Route::put('/home/transaksi/{tran}', 'HomeController@updateTrans');
