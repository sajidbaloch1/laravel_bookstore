@extends('layouts.layouts')
@section('title', 'Cart')
@section('content')
    @php
    $total_items = 0;
    $total_amount = 0;
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h5 class="mb-3">Cart</h5>
                <div class="row">
                    @if (Session::has('cartItems'))
                        @if (session('cartItems') == null)
                            <p>Your cart is empty</p>
                        @endif
                        @foreach (session('cartItems') as $index => $cart_item)
                            <div class="col-12 ">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-9"></div>
                                        </div>
                                        <form action="{{ route('delete') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" value="{{ $index++ }}">
                                            <button class="btn btn-danger">DElETE</button>
                                        </form>
                                        <p>{{ $index }}</p>
                                        <h5 class="card-title">{{ $cart_item['name'] }}</h5>
                                        <p class="card-text">{{ $cart_item['quantity'] * $cart_item['price'] }}</p>
                                        <img src="{{ $cart_item['image'] }}" height="100px" width="100px" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @php
                            $total_items = count(session('cartItems'));
                            $total_amount = array_reduce(
                                session('cartItems'),
                                function ($carry, $item) {
                                    return $carry + $item['quantity'] * $item['price'];
                                },
                                0,
                            );
                        @endphp
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="mb-3" style="color: white;">The total amount</h5>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">The total amount</h5>
                        <p class="card-text">Total Items : <span class="total-item">{{ $total_items }}</span></p>
                        <p class="card-text">Total Price : Rs <span class="total-cart">{{ $total_amount }}<span>
                        </p>
                        <p class="card-text"></p>
                        @if (!empty(session('user')))
                            <form action="{{ route('create') }}" method="GET">
                                <a><input type="submit" class="btn btn-success rounded" value="Order Now"></a>
                            </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
