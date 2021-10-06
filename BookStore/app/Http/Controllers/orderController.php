<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class orderController extends Controller
{
    //
    function index(){
        $orders = order::where('user_id',Auth::user()->id)->get();    
        return view("login.myorders",[
            'orders' => $orders
        ]);    
    }

    public function orderCreate(){
        if(Auth::user()){
        DB::beginTransaction();
        $cart_items = session('cartItems');        
        $order = new order();
        $order->total_ammount = array_reduce(session('cartItems'), function ($carry,$item){
            return $carry + $item['quantity'] * $item['price'];
        },0);
        $order->total_quantity = count($cart_items); 
        $order->user_id = Auth::user()->id;
        $order->save();    
        foreach($cart_items as $cart_item){
            $orderItem = new orderitem();
            $orderItem->quantity= $cart_item['quantity'];
            $orderItem->book_id = $cart_item['id'];
            $orderItem->order_id = $order->id;
            $orderItem->save();
        }
        DB::commit();
        session()->put('cartItems',[]);
        return redirect('./cart-page');}
        else{
            return redirect('login');
        }
    }

    public function orderDetail(Request $req)           {
        $orderItems = orderitem::where('order_id',$req->id)->get();      
        // echo json_encode($orderItems);exit;
        return view('login.order-detaile',
    [
        'orderItems'=>$orderItems
    ]
    ); 
}
    
}
