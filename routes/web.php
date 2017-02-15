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