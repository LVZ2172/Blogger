@extends('layouts.app')

@section('content')
<h1>Add Post</h1>
<hr>

{!! Form::open (['route' => 'posts.store']) !!}

<div class="form-group">
  {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Post:', ['class' => 'control-label']) !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
