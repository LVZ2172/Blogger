@extends('layouts.app')

@section('content')
 <h1>Blog</h1>

 <hr>

<div class="row">
 @foreach ($posts as $post)
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading"><h4><b>{{ $post->title }}</b></h4></div>
        <div class="panel-body">
         {{ $post->body }}
        </div>
    </div>
  </div>
 @endforeach
</div>




@endsection
