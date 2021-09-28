<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\author;
use App\Models\category;
class booksController extends Controller
{
    //
    function index(){
        return view('books.index', ['books'=>book::get(),'categories'=>category::get()]);
        ;
    }

    function bookdetail($id){
        return view('books.bookdetail',['book'=>book::findOrFail($id)]);
    }
}
