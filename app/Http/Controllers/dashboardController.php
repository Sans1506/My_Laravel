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
        ->select('users.name','perjalanans.tanggal','perjalanans.waktu', 'perjalanans.lokasi', 'perjalanans.suhu')
        ->where('users.name','=',auth()->user()->name)
        ->get();
        return view ('pages.dashboard',['data'=>$data]);
    }
    public function simpanperjalanan(Request $request){
        $data=[
            'id_user'=>auth()->user()->id,
            'tanggal'=>$request->tanggal,
            'waktu'=>$request->waktu,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];
        // dd($data);
        perjalanan::create($data);
        return redirect('/dashboard')->with('status',"Penyimpanan Berhasil");
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
    public function home(){
        return view('pages.home');
    }
}