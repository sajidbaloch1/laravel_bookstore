<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    function signup(){
        return view('login.signup');
    }
    //
}
