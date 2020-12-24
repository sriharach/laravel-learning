@extends('layouts.master')
@section('title') Home @endsection
    
@section('content')

<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/img/slide1.jpg')}}" width="100%" height="800px" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/slide2.jpg')}}" width="100%" height="800px" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/slide3.jpg')}}" width="100%" height="800px" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success"></i>
            <h1>Home</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, odio!</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success"></i>
            <h1>About us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium exercitationem error suscipit debitis modi omnis nesciunt enim fugiat, id deleniti.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-concierge-bell fa-3x text-success"></i>
            <h1>Service</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores non nemo quasi dolore ratione nulla molestiae, veniam odio provident minus fuga possimus cupiditate autem ad, neque dolorem placeat error ex. Corporis at expedita earum, nam velit ullam quas dicta. Unde!</p>
        </div>
    </div>
</div>
@endsection