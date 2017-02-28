<?php

use TCG\Voyager\Models\Menu;
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

Route::get('/', function() {
	return view('frontend.pages.homepage');
});

Route::get('/register', function() {
	return view('frontend.pages.register');
});

Route::get('/login', function(){
	return view('frontend.pages.login');
});

Route::get('/details-coffee', function(){
	return view('frontend.pages.detailsCoffee');
});

Route::get('/details-mesin', function(){
	return view('frontend.pages.detailsMesin');
});

Route::get('/komparasi', function(){
	return view('frontend.pages.komparasi');
});

Route::get('/details-resep', function(){
	return view('frontend.pages.detailsResep');
});

Route::get('/list-coffee', function(){
	return view('frontend.pages.listCoffee');
});

Route::get('/list-mesin', function(){
	return view('frontend.pages.listMesin');
});

Route::get('/list-resep', function(){
	return view('frontend.pages.listResep');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
