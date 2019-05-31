@extends('layout.home-layout')

@section('content')

<div class="wrapper">
  @foreach($posts as $post)
    <div class="post-box">
      <h3 class="title"><a href="{{ route('postbyId', $post-> id )}}">{{ $post -> title }}</a></h3>
        @foreach ($post -> categories as $category)
          <div class="category">
            <a href="{{ route('postbycategory', $category -> name )}}">
              {{ $category -> name }}
            </a>
          </div>
        @endforeach
        <br>
      <div class="updated_at">Updated at: <br> {{ $post -> updated_at }}</div>
      <div class="edit-post"><a href="{{ route('editpost', $post -> id )}}">EDIT POST</a></div>
    </div>
  @endforeach
</div>
<div class="create">
  <a href="{{ route('createnewpost')}}">CREATE A NEW POST</a>
</div>

@stop
