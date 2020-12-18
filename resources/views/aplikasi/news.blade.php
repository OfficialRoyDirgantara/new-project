@extends('layout/base')
@section('title','NEWS')
    

@section('pages')
    <div class="container mb-5 mt-5">
        <div class="row">
            @foreach ($news as $newsday)
                
            <div class="col-sm">
                <div class="card" style="">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $newsday->name_news}}</h5>
                        <p class="card-text">{{ $truncated = Str::limit($newsday->content_news, 70, '...') }}</p>
                        <a href="/news/{{ $loop-> iteration}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <br>
            </div>
            @endforeach
            
        
    </div>
</div>
@endsection