@extends('layouts.layouts')
@section('title', 'Book-Detail')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="{{ asset($book->image) }}" style="height: 500px; width:400px;" class="rounded" alt="">
            </div>
            <div class="col-lg-6 ">
                <h1 class="ms-5 fw-light"> Book Name:{{ $book->name }} <br> Authors : {{ $book->author->name }}</h1>
                <br><br>
                <p class=""><span class=" text-success ps-5"> RS :</span>{{ $book->price }}</p>
                <br><br>
                <p class="ms-5">{{ $book->discreption }}</p>
                <form action="{{ route('cart-add') }}" method="POST">
                    @csrf
                    <input type="number" name="quantity" placeholder="Quantity" value="1"
                        class="form-control col-6 form-sm ms-5 my-5" style="width: 300px">
                    <button class="btn btn-success col-6 btn-block ms-5 m-2">Add To Cart</button>
                    <input type="hidden" name="id" value="{{ $book->id }}">
                    <input type="hidden" name="name" value="{{ $book->name }}">
                    <input type="hidden" name="author_name" value="{{ $book->author->name }}">
                    <input type="hidden" name="image" value="{{ $book->image }}">
                    <input type="hidden" name="price" value="{{ $book->price }}">
                </form>
            </div>
        </div>
    </div>
@endsection
