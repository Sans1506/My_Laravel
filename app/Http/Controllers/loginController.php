<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\perjalanan;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function halamanRegister(){
        return view('pages.register');
    }
    public function simpanRegister(Request $request){
        $data=[
            'name'=>$request->nama,
            'email'=>'12345sa@gmail.com',
            'password'=>bcrypt($request->nik)
        ];
       // dd($data);
        User::create($data);       
    }
    public function login(){
        return view('pages.login');
    }
    public function inputdata(){
        return view('pages.inputdata');
    }
    public function inputperjalanan(){
        return view('pages.inputperjalanan');
    }
    public function datauser(){
        return view('pages.datauser');
    }
}