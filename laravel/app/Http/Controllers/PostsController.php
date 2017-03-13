<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class PostsController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except(['index', 'show', 'create']);
    }

    public function index(){
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('posts.index', compact('posts'));
        
    }

    public function show($id){
        
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create(){
        if(!Auth::check()){
            session()->flash('message2', 'You have to log in to create a post!');
            return redirect('/login');
        }
        return view('posts.create');
    }
    public function store(){

        $post= new Post;
        $post->title= request('title');
        $post->body= request('body');
        $post->user_id = auth()->id();

        $post->save();

        return redirect('/');


    }
}
