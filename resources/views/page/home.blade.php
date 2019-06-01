@extends('layout.home-layout')

@section('content')

<div class="wrapper">
  @foreach($posts as $post)
    <div class="post-box">
      <h3 class="title"><a href="{{ route('postbyId', $post-> id )}}">{{ $post -> title }}</a></h3>
      <h4 class="author"><span class="subtitle">Author</span><br>{{ $post -> author -> username }}</h4>
      <span class="subtitle">Category</span><br>
        @foreach ($post -> categories as $category)
          <div class="category">
            <a href="{{ route('postbycategory', $category -> name )}}">
              {{ $category -> name }}
            </a>
          </div>
        @endforeach
        <br>
      <div class="updated_at"><span class="subtitle">Updated at</span> <br> {{ $post -> updated_at }}</div>
      <div class="edit-post"><a href="{{ route('editpost', $post -> id )}}">EDIT POST</a></div>
    </div>
  @endforeach
</div>
<div class="create">
  <a href="{{ route('createnewpost')}}">CREATE A NEW POST</a>
</div>
<div class="search">
  <div class=title>SEARCH A POST</div>
  <form action="{{ route('search') }}" method="get">
    <span class="form-group">
      <label for="title">TITLE</label>
      <input type="text" name="title" value="">
    </span>
    <span class="form-group">
      <label for="content">CONTENT</label>
      <input type="text" name="content" value="">
    </span>
    <span class="form-group">
      <label for="category">CATEGORY</label>
      <select name="category">
        <option value="">Choose category</option>
        @foreach ($categories as $category)
          <option value="{{ $category -> id }}">
            {{ $category -> name }}
          </option>
        @endforeach
      </select>
    </span>
    <span class="form-group">
      <label for="author">AUTHOR</label>
      <select name="author">
        <option value="">Choose author</option>
        @foreach($authors as $author)
          <option value="{{ $author -> id}}">
            {{ $author -> username }}
          </option>
        @endforeach
      </select>
    </span>
    <input type="submit" name="" value="SEARCH">
  </form>
</div>
@stop
