<?php

use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\DataType;
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
    $categoriesKopi = TCG\Voyager\Models\Category::where('parent_id',1)->get();
	return view('frontend.pages.homepage')->with(['categoriesKopi' => $categoriesKopi]);
});

Route::get('/register', function() {
	return view('frontend.pages.register');
});

Route::get('/login', function(){
	return view('frontend.pages.login');
});

Route::get('/details-coffee/{productCoffee}', function(App\ProductCoffee $productCoffee){
    $categoriesKopi = TCG\Voyager\Models\Category::where('parent_id',1)->get();
    $characteristics = preg_split("/\\r\\n|\\r|\\n/", $productCoffee->characteristics);
	return view('frontend.pages.detailsCoffee')->with([
        'productCoffee' => $productCoffee,
        'productImages' => json_decode($productCoffee->images),
        'categoriesKopi' => $categoriesKopi,
        'characteristics' => $characteristics
        ]);
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

Route::get('/list-coffee/{category}', function(TCG\Voyager\Models\Category $category){
    $coffees = App\ProductCoffee::where('category_id', $category->id)->get();
    $categoriesKopi = TCG\Voyager\Models\Category::where('parent_id',1)->get();
	return view('frontend.pages.listCoffee')->with([
        'coffees' => $coffees,
        'categoriesKopi' => $categoriesKopi,
        ]);
});

Route::post('add-to-cart/{productId}/{productName}', function(String $productId, String $productName) {
    Cart::add($productId, $productName, 1, 10);
    return Cart::content();
});

Route::get('/list-mesin', function(){
	return view('frontend.pages.listMesin');
});

Route::get('/list-resep', function(){
	return view('frontend.pages.listResep');
});

Route::get('/profil', function(){
	return view('frontend.pages.profilpage');
});

Route::get('/checkout', function(){
	return view('frontend.pages.checkout');
});

Route::group(['prefix' => 'admin'], function () {
   Voyager::routes();
});

