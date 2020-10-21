<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Auth\Access\Gate;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->where('user_id',auth()->user()->id)->get();
        return view('dashboard')->with(['posts'=>$posts]);
    }

    public function update($id)
    {
        $post = Post::find($id);
        if(Gate::allows('update-post',$post)){
            echo $post;
        }
        
        
        
    }

}
