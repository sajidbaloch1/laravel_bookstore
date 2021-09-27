@extends('layouts.layouts')
@section('title','Book-Detail')
    @section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 border">
    <img src="{{ asset($book->image) }}" style="height: 500px; width:400px;" class="rounded"   alt="">
</div>
<div class="col-lg-6 ">
    <h1 class="ms-5 fw-light"> Book Name:{{ $book->name }}  <br> Authors : {{ $book->author->name }}</h1>

<br><br>    <p class=""><span class="text-success ps-5"> RS :</span>{{ $book->price }}</p>
<br><br>
<p class="ms-5">{{ $book->discreption }}</p>
<input type="number" name="quantity" placeholder="Quantity" value="1" class="form-control col-6 form-sm ms-5 my-5" style="width: 300px">
<button class="btn btn-success col-6 btn-block ms-5 m-2">Add To Cart</button>
</div>
</div>
</div>
@endsection