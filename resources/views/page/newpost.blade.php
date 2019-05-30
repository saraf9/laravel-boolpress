@extends('layout.home-layout')

@section('content')


  <div class="edit-wrapper">
    <h1>CREATE A NEW POST</h1>
    <form action="{{route('savenewpost')}}" method="post">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="title">TITLE</label><br>
        <input type="text" name="title" value="">
      </div><br>
      <div class="form-group">
        @foreach($categories as $category)
          <input type="checkbox" name="categories[]" value="{{ $category -> id}}"> {{ $category -> name }} <br>
        @endforeach
      </div><br>
      <div class="form-group">
        <label for="content">CONTENT</label><br>
        <input type="text" name="content" value="">
      </div><br>
      <button type="submit" name="button">SAVE NEW POST</button>
    </form>
  </div>
@stop
