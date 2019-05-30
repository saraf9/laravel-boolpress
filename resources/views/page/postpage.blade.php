@extends('layout.home-layout')

@section('content')

<div class="wrapper">
  <div class="big-post">
    <h1 class="post-title">
      {{ $post -> title }}
    </h1>
    <div class="post-content">
      {{ $post -> content }}
    </div>
  </div>
</div>
@stop
