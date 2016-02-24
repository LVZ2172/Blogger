@extends('layouts.app')

@section('content')

  <h1><b>{{ strtoupper($posts->title) }}</b></h1>
  <p>
    {{ $posts->body }}
  </p>

  <div class="btn-group" role="group">
  <a href="{{ route('posts.edit', $posts->id) }}" class="btn btn-primary">Edit</a>
  {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $posts->id]]) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
  {!! Form::close() !!}
</div>
@endsection
