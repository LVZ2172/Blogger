<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
  public function index()
  {
    $posts = Post::all();

    return view('posts.index', compact('posts'));
  }

  public function create()

  {
    return view('posts.create');
  }

  public function store(Request $request)

  {
    $post = new Post($request->all());
    $post->save();
    return redirect('/posts');
  }

  public function show()

  {
    
  }

}
