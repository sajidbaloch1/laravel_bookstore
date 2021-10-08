@extends('layouts.layouts')
@section('title', 'My-Orders')
@section('content')
    <h1 class="text-center text-uppercase">Hello {{ Auth::user()->name }} :);</h1>
    <table class="table table-bordered">
        @if (empty($orders))
            <tr>
                <td colspan="3"> Your Order is empty </td>
            </tr>
        @else
            <tr>
                <th>Order Id</th>
                <th>Total Quantity</th>
                <th>Total Amount</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
            @foreach ($orders as $index => $order)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $order->total_quantity }}</td>
                    <td>{{ $order->total_ammount }}</td>
                    <td>{{ $order->created_at->format('d-m-y') }}</td>
                    <td><a href="{{ route('order-detail', $order->id) }}">View</a></td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection
