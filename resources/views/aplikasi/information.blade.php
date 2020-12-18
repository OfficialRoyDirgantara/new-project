@extends('layout/base')
@section('title','INFORMATION')
    

@section('pages')


<div class="container mb-5 mt-5">
  <div class="row">
    @foreach ($information as $info)
    <div class="col-lg box-information">
      <h2>{{ $info -> name_information}}</h2>
      <h5>{{ $info -> time_information}}</h5>
      <div class="fakeimg"><img src="{{ $info -> name_information}}" alt=""></div>
      <br>
      <p>{{ $info -> name_information}}</p>
    </div>
        
    @endforeach
    
  </div>
</div>

@endsection