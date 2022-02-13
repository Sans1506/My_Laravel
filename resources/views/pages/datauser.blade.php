@extends('layouts.master')

@section('section')
    <h1>Dashboard</h1>
@endsection
@section('section2')
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Data User</h4>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NIK</th>
              <th scope="col">Nama Lengkap</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mark</td>
              <td>Otto</td>
            </tr>
            <tr>
              <td>Jacob</td>
              <td>Thornton</td>
            </tr>
            <tr>
              <td>Larry</td>
              <td>the Bird</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection