<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('newsjx',function(){  //文章精选
	return view('newszx');
});

Route::get('peizhi',function(){
	return view('peizhi');
});

Route::get('peizhi-shipan',function(){
	return view('peizhi-shipan');
});
Route::get('peizhi-heiban',function(){
	return view('peizhi_heiban');
});

Route::get('peizhi-show',function(){
	return view('peizhi-show');
});

Auth::routes();

