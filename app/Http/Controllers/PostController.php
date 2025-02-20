<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {
    
    public function show($id) {

        $post = Post::findOrFail($id);
        $user = User::findOrFail($post->user_id);
        return view('posts.show', compact('post'), compact('user'));
    }

    public function showAll() {
        
        $posts = Post::all();
        $posts_with_username = [];
        foreach ($posts as $post) {
            $temp = $post;
            $user = User::findOrFail($post->user_id);
            $temp->username = $user->username;
            array_push($posts_with_username,$temp);
        }
        return view('posts.index', compact('posts_with_username'));
    }

    public function create() {
        return view('posts.create');
    }

    public function createPost(Request $request){
            $post = new Post;
     
            $post->title = $request->title;
            $post->content = $request->content;
            $post->user_id = Auth::id();
            $post->save();
            return redirect(url('/post/'.$post->id));
    }
}
