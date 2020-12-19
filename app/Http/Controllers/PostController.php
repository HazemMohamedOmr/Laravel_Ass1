<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function posts(){
        $posts = Post::orderby('created_at', 'desc')->paginate(6);
        return view('posts', ['posts' => $posts]);
    }

    function show($id){
        $post = Post::find($id);
        return view('show', ['post' => $post]);
    }

    function handleSearch(Request $request){

        // TODO:validate
        return redirect()->route('search', ['keyword' => $request->keyword]);
    }

    function search($keyword){
        $posts = Post::where('title', 'like', '%'.$keyword.'%')
            ->orWhere('body', 'like', '%'.$keyword.'%')
            ->get();
        return view('search', ['posts' => $posts]);
    }

    function handelLatest(Request $request){

        // TODO:validate
        return redirect()->route('latest', ['num' => $request->num]);
    }

    function latest($num){
        $posts = Post::orderby('created_at', 'desc')->limit($num)->get();
        return view('latest', ['posts' => $posts]);
    }
}
