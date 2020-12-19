@extends('layout/app')

@section('title')
    Latest posts
@endsection

@section('content')
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 22rem;">
                    <img src="{{asset('asset/images/imgCap.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"> <a href="{{url('posts/show', $post->id)}}" class="text-decoration-none">{{$post->title}}</a> </h5>
                    <p class="card-text">{{$post->body}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection