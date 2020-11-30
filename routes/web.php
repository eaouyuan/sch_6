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

// 20201123 要修改路由讓首頁呈現品列表

//商品路由request
// Route::pattern('id', '[0-9]+');
Route::pattern('product', '[0-9]+');

// 16-2
Route::pattern('id', '[0-9]+');

Route::get('/', 'ProductController@index')->name('index');
Route::get('/product', 'ProductController@index')->name('product.index');
// Route::get('/product/{id}', 'ProductController@show')->name('product.show');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');

// 新增購物車路由
Route::post('/cart/store', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
// 16-2
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

// Route::get('/', function () {
//     return view('product.index');
// });
// Route::get('/product/index', function () {
//     return view('product.index');
// })->name('product.index');

Auth::routes();

Route::get('/home', 'ProductController@index')->name('home');

/*
Route::get('/', function () {
// 第一種
// return view('welcome')->with('name', 'yuan')->with('say', '嗨！');

// 第二種
$data = ['name' => 'yaoyuan2', 'say' => '嗨！'];
return view('welcome', $data);

// 第三種
// return view('welcome', ['name' => 'tad', 'say' => '嗨！']);

// 第四種
// $name = 'yaoyuan4';
// $say  = '嗨！';
// return view('welcome', compact('name', 'say'));

}); */
