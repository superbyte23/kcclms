@extends('layouts.template')

@section('content')

<div class="content my-3">
  <div class="container-xl"> 
    <div class="row"> 
      <div class="box col-md-9"> 
        <div class="row row-list">
          <div class="col-md-12" id="poster"> 
            <h1>KCC LMS Dashboard</h1>
          </div>
        </div> 
      </div> 
    </div>
    <div id="carousel-sample" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carousel-sample" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carousel-sample" data-bs-slide-to="1" class=""></li>
        <li data-bs-target="#carousel-sample" data-bs-slide-to="2" class=""></li>
        <li data-bs-target="#carousel-sample" data-bs-slide-to="3" class=""></li>
        <li data-bs-target="#carousel-sample" data-bs-slide-to="4" class=""></li>
      </ol>
      <div class="carousel-inner  h-50">
        <div class="carousel-item active">
          <img class="d-block w-100" alt="" src="{{asset('static/photos/75b555b99d5b38c4.jpg')}}">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" alt="" src="{{asset('static/photos/802a16cdf5ce3551.jpg')}}">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" alt="" src="{{asset('static/photos/75b555b99d5b38c4.jpg')}}">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" alt="" src="{{asset('static/photos/5614ec7eb9034d04.jpg')}}">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" alt="" src="{{asset('static/photos/77586f6ffa9fbc5e.jpg')}}">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-sample" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-sample" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
</div>  
@endsection