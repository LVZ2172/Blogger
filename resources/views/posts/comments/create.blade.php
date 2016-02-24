@extends('layouts.app')

@section('content')

<h1>Add Review</h1>
<hr>

{!! Form::open (['route' => ['posts.comments.store', $post], 'class' => 'form']) !!}

<div class="form-group">
  {!! Form::label('author', 'Author:', ['class' => 'control-label']) !!}
  {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('comment', 'Comment:', ['class' => 'control-label']) !!}
  {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create Comment', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
