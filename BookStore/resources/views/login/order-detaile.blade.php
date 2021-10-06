@extends('layouts.layouts')
@section('title', 'Order-Detail')
@section('content')
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Image</th>
            <th>Author Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
        @foreach ($orderItems as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->book->name }}</td>
                <td><img src="{{ '/' . $item->book->image }}" alt="" width="50px"></td>
                <td>{{ $item->book->author->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->book->price }}</td>
                <td>{{ $item->book->price * $item->quantity }}</td>
            </tr>
        @endforeach
    </table>
@endsection
