@extends('layout/base')
@section('title', 'HOME')
    
@section('pages')
    
    <!-- Carrousel -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/img/la.jpg') }}" alt="Los Angeles" width="100%" height="auto">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/chicago.jpg') }}" alt="Chicago" width="100%" height="auto">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/ny.jpg') }}" alt="New York" width="100%" height="auto">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <!-- End of Carrousel -->

      <div class="greet">
        <h1>Selamat datang di Politeknik Elektronika Negeri Surabaya</h1>
        <p>Silahkan Login untuk menikmati fitur website</p>
      <a href="{{ url('/login')}}"><button class="btn btn-success">LOGIN</button></a>
      </div>

@endsection