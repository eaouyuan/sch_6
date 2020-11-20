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
    return view('product.index');
});
Route::get('/product/index', function () {
    return view('product.index');
})->name('product.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
