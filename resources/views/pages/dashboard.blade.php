@extends('layouts.master')

@section('section')
    <h1>Home</h1>
@endsection
@section('section2')
<div class="col-6 col-md-6 col-lg-6">
    <div class="card">
    <div class="card-header">
        <h4>Kota Tujuan</h4>
    </div>
    <div class="card-body">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('')}}assets/img/bandung.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bandung</h5>
                {{-- <p></p> --}}
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('')}}assets/img/bali.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bali</h5>
                {{-- <p></p> --}}
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('')}}assets/img/lombok.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Lombok</h5>
                {{-- <p></p> --}}
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    </div>
@endsection
