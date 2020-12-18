@extends('layout/base')

@section('pages')
<div class=" mb-5 mt-5">
      <div class="col-lg box-information" style="width: 100%!important;">
        <h2>{{ $news -> name_news}}</h2>
        <h5>{{ $news -> time_news}}</h5>
        <div class="fakeimg"><img src="{{ $news -> image_news}}" alt=""></div>
        <br>
        <p>{{ $news -> content_news}}</p>
      </div>
  </div>
@endsection



