<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\FacebookController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/login',[UserController::class, 'loginView'])->name('login');
    Route::post('/login',[UserController::class, 'login']);
    Route::get('/signup', function () {  return view('signup');   });
    Route::post('/signup',[UserController::class, 'signup']);
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});

Route::get('detail/{id}',[ProductController::class, 'detail']);
Route::get('/search',[ProductController::class, 'search']);
Route::middleware(['auth'])->group(function () {
    Route::post('/add_to_cart',[ProductController::class, 'addToCart']);
    Route::get('/cartlist',[ProductController::class, 'cartList']);
    Route::get('/removecart/{id}',[ProductController::class, 'removeCart']);
    Route::get('/checkout',[ProductController::class, 'checkout']);
    Route::post('/placeorder',[ProductController::class, 'placeOrder']);
    Route::get('/myorders',[ProductController::class, 'myOrders']);
    Route::get('/removeorder/{id}',[ProductController::class, 'removeOrder']);
    Route::get('/order/pdf/{id}',[ProductController::class, 'exportPDF']);
});
Route::get('/contact', function () {  return view('contact');   });

//Admin
Route::middleware(['admin'])->group(function () {
    Route::get('/admin',[ProductController::class, 'adminHome']);
    Route::get('/edit/{id}',[ProductController::class, 'editProduct']);
    Route::put('/update/{id}',[ProductController::class, 'updateProduct']);
    Route::get('/customerorders',[ProductController::class, 'customerOrders']);
    Route::get('/placed/{id}',[ProductController::class, 'placed']);
    Route::get('/shipped/{id}',[ProductController::class, 'shipped']);
    Route::get('/delivered/{id}',[ProductController::class, 'delivered']);
    Route::get('/paid/{id}',[ProductController::class, 'paid']);
});

//Stripe Payment Gateway
Route::middleware(['auth'])->group(function () {
    Route::get('stripe/{price}', [StripeController::class, 'stripe'])->name('stripe');
    Route::post('stripe/{price}', [StripeController::class, 'stripePost'])->name('stripe.post');
});

//Facebook_login
Route::get('facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('facebook/callback', [FacebookController::class, 'handleFacebookCallback']);