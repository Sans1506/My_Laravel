@extends('layouts.master')

@section('section')
    <h1>Input Data</h1>
@endsection
@section('section2')
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
<div class="card-body">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">NIK</label>
      <input type="text" class="form-control" id="exampleControlInput1" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nama Lengkap</label>
      <input type="text" class="form-control" id="exampleControlInput1">
    </div>
    <button type="submit" class="btn btn-primary">Input</button>
  </form>
</div>
@endsection