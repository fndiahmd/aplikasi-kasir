<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
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

    public function register(){
        return view('login.register');
    }
    public function simpanregister(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => 'manager', 
            'level' => 'kasir', 
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('login.register');
    }
    public function admin(){
        return view('admin.index');
    }
}
