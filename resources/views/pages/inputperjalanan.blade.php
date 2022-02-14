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
  <form method="POST" action="/simpanperjalanan" class="needs-validation" novalidate="">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="id_user">id_user</label>
      <input id="id_user" type="text" name="id" tabindex="1" placeholder="Id_User" class="form-control">
    </div>
    <div class="form-group">
      <label for="tanggal">tanggal</label>
      <input type="text" class="form-control" tabindex="1" name="tanggal" placeholder="yy:mm:dd" id="tanggal">
    </div>
    <div class="form-group">
      <label for="lokasi">lokasi</label>
      <input type="text" class="form-control" tabindex="1" placeholder="Lokasi" name="lokasi" id="lokasi">
    </div>
    <button type="submit" class="btn btn-primary">Input</button>
  </form>
</div>

@endsection