<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->all();
        return view('dashboard')->with(['posts'=>$posts]);
    }

}
