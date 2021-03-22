<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\CustomerOrderController;
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
    Route::get('/login', function () {  return view('auth.login');   })->name('login');
    Route::post('/login',[UserController::class, 'login']);
    Route::get('/signup', function () {  return view('auth.signup');   })->name('signup');
    Route::post('/signup',[UserController::class, 'signup']);
});

Route::get('detail/{id}',[ProductController::class, 'detail']);
Route::get('/search',[ProductController::class, 'search']);
Route::middleware(['auth'])->group(function () {
    Route::post('/add_to_cart',[ProductController::class, 'addToCart']);
    Route::get('/cartlist',[ProductController::class, 'cartList']);
    Route::get('/removecart/{id}',[ProductController::class, 'removeCart']);
    Route::get('/checkout',[ProductController::class, 'checkout']);
    Route::post('/placeorder',[ProductController::class, 'placeOrder']);
    Route::get('/buy/{id}',[ProductController::class, 'buyNow']);
    Route::post('/placeoneorder',[ProductController::class, 'placeOneOrder']);
    Route::get('/myorders',[ProductController::class, 'myOrders']);
    Route::get('/removeorder/{id}',[ProductController::class, 'removeOrder']);
    Route::get('/order/pdf/{id}',[ProductController::class, 'exportPDF']);
    
    Route::get('/account', function () {  return view('auth.account');   })->name('account');
    Route::put('/account/{id}',[UserController::class, 'updateAccount']);
    Route::get('/logout', function () {     Auth::logout();     return redirect('login');   });
});
Route::get('/contact', function () {  return view('contact');   });

//Admin
Route::middleware(['admin'])->group(function () {
    Route::get('/admin',[AdminProductController::class, 'adminHome']);
    Route::get('/add', function () {  return view('admin.addproduct');   })->name('product.add');
    Route::post('/add',[AdminProductController::class, 'addProduct']);
    Route::get('/edit/{id}',[AdminProductController::class, 'editProduct']);
    Route::put('/update/{id}',[AdminProductController::class, 'updateProduct']);
    Route::get('/remove/{id}',[AdminProductController::class, 'removeProduct']);
    Route::get('/customerorders',[CustomerOrderController::class, 'customerOrders']);
    Route::get('/placed/{id}',[CustomerOrderController::class, 'placed']);
    Route::get('/shipped/{id}',[CustomerOrderController::class, 'shipped']);
    Route::get('/delivered/{id}',[CustomerOrderController::class, 'delivered']);
    Route::get('/paid/{id}',[CustomerOrderController::class, 'paid']);
    Route::get('/debit/{id}',[CustomerOrderController::class, 'debitMethod']);
    Route::get('/cod/{id}',[CustomerOrderController::class, 'codMethod']);
});

//Stripe Payment Gateway
Route::middleware(['auth'])->group(function () {
    Route::get('stripe/{price}', [StripeController::class, 'stripe'])->name('stripe');
    Route::post('stripe/{price}', [StripeController::class, 'stripePost'])->name('stripe.post');
});

//Facebook_login
Route::get('facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('facebook/callback', [FacebookController::class, 'handleFacebookCallback']);