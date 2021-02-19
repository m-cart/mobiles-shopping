<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class, 'home']);

Route::get('/login',[UserController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login',[UserController::class, 'login'])->middleware('guest');
Route::get('/signup', function () {  return view('signup');   })->middleware('guest');
Route::post('/signup',[UserController::class, 'signup'])->middleware('guest');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});

Route::get('detail/{id}',[ProductController::class, 'detail']);
Route::get('/search',[ProductController::class, 'search']);
Route::post('/add_to_cart',[ProductController::class, 'addToCart'])->middleware('auth');
Route::get('/cartlist',[ProductController::class, 'cartList'])->middleware('auth');
Route::get('/removecart/{id}',[ProductController::class, 'removeCart'])->middleware('auth');
Route::get('/checkout',[ProductController::class, 'checkout'])->middleware('auth');
Route::post('/placeorder',[ProductController::class, 'placeOrder'])->middleware('auth');
Route::get('/myorders',[ProductController::class, 'myOrders'])->middleware('auth');
Route::get('/removeorder/{id}',[ProductController::class, 'removeOrder'])->middleware('auth');
Route::get('/contact', function () {  return view('contact');   });

//Admin
Route::get('/admin',[ProductController::class, 'adminHome'])->middleware('auth');
Route::get('/edit/{id}',[ProductController::class, 'editProduct'])->middleware('auth');
Route::put('/update/{id}',[ProductController::class, 'updateProduct'])->middleware('auth');
Route::get('/customerorders',[ProductController::class, 'customerOrders'])->middleware('auth');
Route::get('/placed/{id}',[ProductController::class, 'placed'])->middleware('auth');
Route::get('/shipped/{id}',[ProductController::class, 'shipped'])->middleware('auth');
Route::get('/delivered/{id}',[ProductController::class, 'delivered'])->middleware('auth');