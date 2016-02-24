<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use Flash;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
  public function create(Post $posts)

  {
    return view('posts.comments.create')->withPost($posts);
  }

  public function store(Request $request, Post $posts)

  {
    $this->validate($request, [
      'author' => 'required',
      'comment' => 'required'
      ]);

    $posts->comments()->create(['author' => $request->author, 'comment' => $request->comment]);
    return redirect()->route('posts.show', ['id' => $posts->id ]);
  }
}
