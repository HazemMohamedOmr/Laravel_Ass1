@extends('layout/app')

@section('title')
    Post
@endsection

@section('content')

    <div class="card mb-3">
        <img src="{{asset('asset/images/imgCap.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->body}}.</p>
            <p class="card-text"><small class="text-muted">Last updated at {{$post->updated_at}}</small></p>
        </div>
    </div>
    
@endsection