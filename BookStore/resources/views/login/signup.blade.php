@extends('layouts.layouts')
@section('title','SingUp')
        
@section('content')
<div class="container">
    <h1 class="text-center" style="background: rgb(2, 0, 36);
     background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(20, 20, 20, 0.9640231092436975) 35%, rgba(0, 212, 255, 1) 100%); color: white;">SIGN UP</h1>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('signup-confirmed') }}" method="POST" class="border p-5 mt-5">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">First Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-5">
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-success float-end">
                </form>
            </div>
        </div>
    </div>

@endsection