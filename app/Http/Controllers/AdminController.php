<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;

use App\Category;
use App\Post;

class AdminController extends Controller
{
    function createNewPost(){

      $categories = Category::all();
      return view('page.newpost', compact('categories'));
    }

    function saveNewPost(PostRequest $request){

      $validatedData = $request -> validated();

      $post = Post::create($validatedData);
      $categoriesId = $validatedData['categories'];
      $categories = Category::find($categoriesId);

      $post -> categories() -> attach($categories);

      return redirect('/');
    }


    function editPost($id){

      $post = Post::findOrFail($id);
      $categories = Category::all();
      return view("page.edit", compact('post','categories'));
    }

    function updatePost(PostRequest $request, $id){

      $validatedData = $request -> validated();

      $post = Post::create($validatedData);
      $categoriesId = $validatedData['categories'];
      $categories = Category::find($categoriesId);

      $post -> categories() -> sync($categories);

      return redirect('/');
    }
}
