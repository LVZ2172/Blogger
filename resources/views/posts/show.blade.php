@extends('layouts.app')

@section('content')

  <h1><b>{{ strtoupper($posts->title) }}</b></h1>
  <p>
    {{ $posts->body }}
  </p>

  <div class="btn-group" role="group">
  <a href="{{ route('posts.edit', $posts->id) }}" class="btn btn-primary">Edit</a>
  <a href="{{ route('posts.comments.create', $posts->id) }}" class="btn btn-info">Add Comment</a>
  {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $posts->id]]) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
  {!! Form::close() !!}
</div>

  <hr>
  <h2>Comments:</h2>
    <ul>
      @foreach ($posts->comments as $comment)
       <li><h4 id="author"><b>{{ $comment->author }}</b></h4></li>
       <li>- {{ $comment->comment }}</li>
  @endforeach
    </ul>
@endsection
