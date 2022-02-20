@extends('layouts.master')

@section('section')
    <h1>Input Perjalanan</h1>
@endsection
@section('section2')
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3>Data Perjalanan</h3>
      </div>
<div class="card-body">
  <form method="POST" action="/simpanperjalanan">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="tanggal">tanggal</label>
      <input type="date" class="form-control"  name="tanggal" placeholder="yy:mm:dd" id="tanggal">
    </div>
    <div class="form-group">
      <label for="tanggal">Jam</label>
      <input type="time" class="form-control"  name="waktu" placeholder="--:--" id="waktu">
    </div>
    <div class="form-group">
      <label for="lokasi">lokasi</label>
      <input type="text" class="form-control"  placeholder="Lokasi" name="lokasi" id="lokasi">
    </div>
    <div class="form-group">
      <label for="suhu">suhu</label>
      <input type="number" class="form-control"  name="suhu" placeholder="suhu" id="suhu">
    </div>
    <button type="submit" class="btn btn-primary">Input</button>
  </form>
</div>

@endsection