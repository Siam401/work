<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    function index(){
        $posts=Post::paginate(5);

        return view('posts.index',compact('posts'));

    }
    function show($id){
        $post=Post::findOrFail($id);

        return view('posts.show',compact('post'));
    }
    function create(){
        return view('posts.create');
    }
    function store(PostRequest $request){
        Post::create($request->all());
        Session::flash('message','Post Created Successfully !!');
        Return Redirect('/posts');
    }
    function edit($id){
        $post=Post::findOrFail($id);

        return view('posts.edit',compact('post'));
    }
    function update(PostRequest $request,$id){
        $post=Post::findOrFail($id);
        $post->update($request->all());
        Session::flash('message','Post Updated Successfully !!');
        return redirect('/posts');
    }
    function destroy($id){
        Post::destroy($id);
        Session::flash('message1','Post Deleted Successfully !!');
        return redirect('/posts');
    }
}
