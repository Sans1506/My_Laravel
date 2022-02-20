<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perjalanan;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index(){
        $data = DB::table('perjalanans')
        ->join('users', 'users.id', '=', 'perjalanans.id_user')
        ->select('users.email','perjalanans.tanggal','perjalanans.waktu', 'perjalanans.lokasi', 'perjalanans.suhu')
        //->where('users.name', '=', auth()->user()$data)
        ->get();
        return view ('pages.dashboard',['data'=>$data]);
    }
    public function simpanperjalanan(Request $request){
        $data=[
            'id_user'=>1,
            'tanggal'=>$request->tanggal,
            'waktu'=>$request->waktu,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];
        // dd($data);
        perjalanan::create($data);
        return redirect('/dashboard')->with('message',"Penyimpanan Berhasil");
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
}