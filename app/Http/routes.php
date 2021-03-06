<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

Route::post('/home','LoginController@login');



Route::get('/dashboard', 'DashboardController@index');



Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/karyawan', function()
{
	return View::make('karyawan');
});

Route::resource('product','ProductController');
Route::resource('demand','DemandController');
Route::resource('stock','StockController');
Route::resource('AuthController','Auth/AuthController');
Route::resource('user','UserController');
Route::get('/dataproduk', function()
{
	return View::make('dataproduk');
});


Route::get('/permintaan', function()
{
	return View::make('permintaan');
});

Route::get('/produk', function()
{
	return View::make('produk');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

Route::get('/about', 'PagesAbout@home');
