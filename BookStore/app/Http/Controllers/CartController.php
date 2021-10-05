<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    function index(){
        return view('books.cart-page');
    }

    public function addToCart(Request $req){
    if(Auth::user()){
        $existingItems = session()->get('cartItems',[]);
        $existingItems[] = $req->all();
        session()->put('cartItems',$existingItems);
        return redirect('./cart-page');
    }else{
        return redirect('/login');
    }
    }
    public function deleteCart(Request $req){
        $cartItem  = session()->pull('cartItems',[]);
        array_splice($cartItem,$req->index,1);
        session()->put('cartItems',$cartItem);
    return redirect('/cart-page');

    }
}
