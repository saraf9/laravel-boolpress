@extends('layout.home-layout')

@section('content')


  <div class="edit-wrapper">
    <h1>EDIT POST</h1>
    <form action="{{route('updatepost', $post -> id)}}" method="post">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="title">TITLE</label><br>
        <input type="text" name="title" value="{{ $post -> title}}">
      </div><br>
      <div class="form-group">
        @foreach($categories as $category)
          <input type="checkbox" name="categories[]" value="{{ $category -> id}}"
            @if( $post -> categories -> contains($category -> id))
              checked
            @endif
          > {{ $category -> name }} <br>
        @endforeach
      </div><br>
      <div class="form-group">
        <label for="content">CONTENT</label><br>
        <input type="text" name="content" value="{{ $post -> content}}">
      </div><br>
      <button type="submit" name="button">SAVE CHANGES</button>
    </form>
  </div>
@stop
