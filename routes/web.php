<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
//admin
Route::get('/admin',[UserController::class,'Admin'])->middleware('auth');

//Products page, cart, checkout
Route::get('/',[ProductController::class,'home']);
Route::get('/shop',[ProductController::class,'viewshop']);
Route::get('productdetail/{id}',[ProductController::class,'details'])->name('product_detail');
Route::get('/cart',[ProductController::class,'Cart'])->name('cart');
Route::get('/checkout',[ProductController::class,'CheckOut'])->name('checkout');

//user login,logout,register,forgot password
Route::view('/login',('Auth.login'))->middleware('guest')->name('login');
Route::post('/login',[UserController::class,'Authenticate']);
Route::get('login/google',[UserController::class,'GoogleRedirect']);
Route::get('login/google/callback',[UserController::class,'LoginWithGoogle']);
Route::get('/logout',[UserController::class,'logout']);
Route::get('/userregister',[UserController::class,'UserRegister'])->name('userregister');
Route::post('/userregister',[UserController::class,'UserRegisterStore']);


//seller register
Route::get('/sellerregister',[UserController::class,'SellerRegister'])->name('sellerregister');

//products add
Route::get('/productsadd',[ProductController::class,'AddProduct'])->middleware('auth');
Route::post('/store',[ProductController::class,'AddProductStore']);
