@extends('layouts.master')

@section('section')
    <h4>Data Perjalanan</h4>
@endsection
@section('section2')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
<div class="card-body">
    <table class="table table-sm table-striped table-bordered">
        <thead class="thead-dark">
            @php
                $no=1
            @endphp
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Suhu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $peduli_diri)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$peduli_diri->tanggal}}</td>
                    <td>{{$peduli_diri->waktu}}</td>
                    <td>{{$peduli_diri->lokasi}}</td>
                    <td>{{$peduli_diri->suhu}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
