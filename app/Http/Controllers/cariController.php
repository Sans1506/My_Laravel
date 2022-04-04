<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cariController extends Controller
{
    public function cariperjalanan(Request $request) {
        if (!empty($request->input('kota'))&& empty($request->input('suhu'))&& empty($request->input('tanggal'))&& empty($request->input('jam'))){
            $cari=$request->kota;
            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
            ->where(function ($query) use($cari) {
                $query->where('users.name', auth()->user()->name)
                    ->where('perjalanans.lokasi',$cari);
            })->get(['users.name', 'perjalanans.*']);
            if ($data) {
                return view('pages.dashboard',['data'=>$data])->with('alert','data di temukan');
            }else{
                abort(404);
            }
        }elseif(empty($request->input('kota'))&& !empty($request->input('suhu'))&& empty($request->input('tanggal'))&& empty($request->input('jam'))){
            $cari=$request->suhu;
            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
            ->where(function ($query) use($cari) {
                $query->where('users.name', auth()->user()->name)
                    ->where('perjalanans.suhu',$cari);
            })->get(['users.name', 'perjalanans.*']);
            if ($data) {
                return view('pages.dashboard',['data'=>$data])->with('alert','data di temukan');
            }else{
                abort(404);
            }
        }elseif(empty($request->input('kota'))&& empty($request->input('suhu'))&& !empty($request->input('tanggal'))&& empty($request->input('jam'))){
            $cari=$request->tanggal;
            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
            ->where(function ($query) use($cari) {
                $query->where('users.name', auth()->user()->name)
                    ->where('perjalanans.tanggal',$cari);
            })->get(['users.name', 'perjalanans.*']);
            if ($data) {
                return view('pages.dashboard',['data'=>$data])->with('alert','data di temukan');
            }else{
                abort(404);
            }
        }elseif(empty($request->input('kota'))&& empty($request->input('suhu'))&& empty($request->input('tanggal'))&& !empty($request->input('jam'))){
            $cari=$request->jam;
            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
            ->where(function ($query) use($cari) {
                $query->where('users.name', auth()->user()->name)
                    ->where('perjalanans.jam',$cari);
            })->get(['users.name', 'perjalanans.*']);
            if ($data) {
                return view('pages.dashboard',['data'=>$data])->with('alert','data di temukan');
            }else{
                return redirect('/dashboard')->with('alert', 'data tidak di temukan');
            }
        }else {
            $data = DB::table("perjalanans")
            ->join('users', 'users.id', '=', 'perjalanans.id_user')
            ->select('users.email','perjalanans.tanggal','perjalanans.jam','perjalanans.lokasi', 'perjalanans.suhu')
            ->where('users.name', '=',auth()->user()->name)
            ->get();
            return view('pages.dashboard',['data'=>$data]);
        }
    }
}