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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\ProductController@home');

Route::get('/login', function () {
    return view('login');
});
Route::post('/login','App\Http\Controllers\UserController@login');
Route::get('/signup', function () {  return view('signup');   });
Route::post('/signup','App\Http\Controllers\UserController@signup');
Route::get('/logout', function () {
    Session::forget('user');                                    //To erase session 'user' from the browser
    return redirect('login');
});

Route::get('detail/{id}','App\Http\Controllers\ProductController@detail');
Route::get('/search','App\Http\Controllers\ProductController@search');
Route::post('/add_to_cart','App\Http\Controllers\ProductController@addToCart');
Route::get('/cartlist','App\Http\Controllers\ProductController@cartList');
Route::get('/removecart/{id}','App\Http\Controllers\ProductController@removeCart');
Route::get('/checkout','App\Http\Controllers\ProductController@checkout');
Route::post('/placeorder','App\Http\Controllers\ProductController@placeOrder');
Route::get('/myorders','App\Http\Controllers\ProductController@myOrders');
Route::get('/removeorder/{id}','App\Http\Controllers\ProductController@removeOrder');
Route::get('/contact', function () {  return view('contact');   });

//Admin
Route::get('/admin','App\Http\Controllers\ProductController@adminHome');
Route::get('/edit/{id}','App\Http\Controllers\ProductController@editProduct');
Route::put('/update/{id}','App\Http\Controllers\ProductController@updateProduct');