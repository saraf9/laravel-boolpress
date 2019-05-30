<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

  function getPostById($id){

    $post = Post::findOrFail($id);

    return view('page.postpage', compact('post'));
  }

}
