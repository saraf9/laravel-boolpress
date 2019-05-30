<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{ mix('js/app.js') }}">
    </script>
    <title>MyBlog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|PT+Sans+Narrow&display=swap" rel="stylesheet">

  </head>
  <body>
    <header>
      <h1>Sara's Blog</h1>
    </header>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
      <div class="alert alert-success">
        <div class="container">
          {{ session('success') }}
        </div>
      </div>
    @endif

    @yield('content')
    <footer>
      <h5>All rights reserved<i class="far fa-copyright"></i></h5>
    </footer>
  </body>
</html>
