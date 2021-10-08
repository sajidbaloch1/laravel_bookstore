<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booksController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\orderController;

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
Route::get('/',[booksController::class,'index']);
Route::get('/book/detail/{id}',[booksController::class,'bookdetail'])->name('book-detail');
Route::get('/cart-page',[CartController::class,'index'])->name('cart-page');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/signup',[SignupController::class,'signup'])->name('signup');
Route::post('/sungup-confirmed',[SignupController::class,'signupConfirmed'])->name('signup-confirmed');
Route::post('/login-confirmed',[LoginController::class,'loginConfirmed'])->name('login-confirmed');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/cart-page/cart-add',[CartController::class,'addToCart'])->name('cart-add');
Route::post('/cart-page/delete',[CartController::class,'deleteCart'])->name('delete');
Route::get('/orders',[orderController::class,'index'])->name('my-orders');
Route::get('/orders/{id}',[orderController::class,'orderDetail'])->name('order-detail');
Route::get('/order-create',[orderController::class,'orderCreate'])->name('create');

Route::get('/about', function () {
    return view('books.about');
});
Route::get('/contact', function () {
    return view('books.contact');
});
