<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {
    
    public function show($id) {

        $post = Post::findOrFail($id);
        
        return view('posts.show', compact('post'));
    }

    public function showAll(){
        
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }
}
