@extends('layouts.app')


@section('content')

{!! Form::model($post, ['method' => 'PATCH', 'route' => ['posts.update', $post->id]]) !!}

<div class="form-group">
  {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Post:', ['class' => 'control-label']) !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
