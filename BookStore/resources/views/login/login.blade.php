@extends('layouts.layouts')
@section('title', 'Login')
@section('content')
    <div class="container">
        <h1 class="text-center"
            style="background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(20, 20, 20, 0.9640231092436975) 35%, rgba(0, 212, 255, 1) 100%); color: white;">
            LOGIN</h1>
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('errors'))
                    {{ 'hello' }}
                @endif
                <form action="{{ route('login-confirmed') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control my-5" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control my-5" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <input type="submit" value="Submit" class="btn btn-success float-end">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
