@extends('layout/app')

@section('title')
    Tags
@endsection

@section('content')

    <h2 class="diplay-2 py-4 text-light text-center">Tags</h2>

    <div class="row">
        @foreach ($tags as $tag)
            <div class="col-md-2 mb-4">
                <div>
                    <a href="#" class="btn btn-secondary">{{$tag->name}}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection