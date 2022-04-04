<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
    public function login(){
        return view('login.login');
    }
    public function authenticate(Request $request){
        $data = $request->validate([
            'nik'=> 'required|integer|min:6',
            'password'=> 'required|min:5'
        ]);
        
        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        return back()->with('loginError', 'Login failed');
    }
}