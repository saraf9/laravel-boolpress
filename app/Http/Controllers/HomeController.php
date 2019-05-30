<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class HomeController extends Controller
{
    function getLastFivePost(){

      $posts = Post::orderByDesc('updated_at')->take(5)->get();
      return view('page.home', compact('posts'));
    }
}
