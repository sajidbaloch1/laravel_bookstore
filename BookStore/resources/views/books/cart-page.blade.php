@extends('layouts.layouts')
@section('title','Cart')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h5 class="mb-3">Cart</h5>
            <div class="row">
                        <div class="col-12 show-cart">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-9"></div>
                                    </div>
                                    <form action="cart-delete.php" method="POST">
                                        <input type="hidden" name="index" value="">
                                        <button>Delete</button>
                                    </form>
                                    <h5 class="card-title"></h5>
                                    <p class="card-text"></p>
                                    <img src="" alt="">
                                   
                                </div>
                            </div>
                        </div>
               
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="mb-3" style="color: white;">The total amount</h5>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">The total amount</h5>
                    <p class="card-text">Total Items : <span class="total-item"></span></p>
                    <p class="card-text">Total Price : Rs <span class="total-cart">span>.00 </p>
                    <p class="card-text"></p>
                    <form action="order.php" method="POST">
                        <a ><input type="submit" class="btn btn-success rounded" value="Order Now"></a>
                        <input type="hidden" name="total_Amount" value="">
                        <input type="hidden" name="total_item" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection