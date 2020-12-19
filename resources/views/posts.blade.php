@extends('layout/app')

@section('title')
    Posts
@endsection

@section('content')
    <div class="pb-4">
        <div class="row">
            <div class="col-md-4">
                <form class="d-flex" method="POST" action="{{route('search.handle')}}">
                    @csrf
                    <input class="form-control me-2" name="keyword" type="text" placeholder="Search on posts">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            </div>

            <div class="col-md-4 offset-4">
                <form class="d-flex" method="POST" action="{{route('posts.handle')}}">
                    @csrf
                    <input class="form-control me-2" name="num" type="number" placeholder="Number of posts">
                    <button class="btn btn-outline-secondary btn-fix" type="submit">Show Latest</button>
                </form>
            </div>
        </div>
    </div>

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

    {{ $posts->links() }}
        

@endsection
