<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('login.index');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        }
        return redirect('/');

    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
