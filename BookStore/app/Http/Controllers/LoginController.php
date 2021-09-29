<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(){
        return view('login.login');
    }
    
    public function loginConfirmed(Request $req){
        $req->validate([
            'email'=>['required','email'],
            'password'=>['required','min:5','max:9']
        ]);
        $credential = $req->only('email','password');
        if(Auth::attempt($credential)){
            $req->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match record'
        ]);
    }
    public function logout(Request $req){
         Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}
