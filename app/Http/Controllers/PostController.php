<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {
    
    public function show($id) {

        $post = Post::findOrFail($id);
        
        return view('posts.show', compact('post'));
    }

    public function showAll() {
        
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function createPost(Request $request){
            $post = new Post;
     
            $post->title = $request->title;
            $post->content = $request->content;
     
            $post->save();

     
            return redirect(url('/post/'.$post->id));
    }
}
