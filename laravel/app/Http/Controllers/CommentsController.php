<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{
    public function store (Post $post){
        
        if (! auth()->id()){
            session()->flash('message', 'You have to log in to post a comment!');
        return redirect('/login');
        }
        
        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id,
            'user_id' => auth()->id()
        ]);

      return back();
    }
}
