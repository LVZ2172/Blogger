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
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required'
      ]);

    flash()->info('Successfully added!');

    $post = new Post($request->all());
    $post->save();
    return redirect('/posts');
  }

  public function show(Post $posts)

  {
    return view('posts.show', compact('posts'));
  }

  public function edit(Post $posts)

  {
    return view('posts.edit')->withPost($posts);
  }

  public function update(Request $request, Post $posts)

  {
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required'
      ]);

    flash()->info('Successfully updated!');


    $posts->update($request->all());
    return redirect('/posts');
  }

  public function destroy(Post $posts)

  {
    flash()->info('Successfully deleted!');

    $posts->delete();
    return redirect('/posts');
  }

}
