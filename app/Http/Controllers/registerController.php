<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class registerController extends Controller
{
        public function halamanRegister(){
        return view('registrasi.register');
    }
    public function simpanRegister(Request $request){
        $data = $request->validate([
            'nik' => 'required|integer|min:6|unique:users',
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
        ]   
    );
        $data['password'] = bcrypt($data['password']);
        // $data=[
        //     'name'=>$request->nama,
        //     'email'=>'12345sa@gmail.com',
        //     'password'=>bcrypt($request->nik)
        // ];
       // dd($data);
        User::create($data);
        return redirect('/login')->with("status","Registrasi berhasil Silahkan login");
    }
}