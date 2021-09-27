<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booksController;
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
//     return view('books.book');
// });
Route::get('/',[booksController::class,'index']);
Route::get('/book/detail/{id}',[booksController::class,'bookdetail'])->name('book-detail');
Route::get('/about', function () {
    return view('books.about');
});
Route::get('/contact', function () {
    return view('books.contact');
});
Route::get('/logon', function () {
    return view('login.logon');
});
Route::get('/singup', function () {
    return view('login.singup');
});

