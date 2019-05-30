<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Post;

class CategoryController extends Controller
{
    function getAllPostsByCategoryName($name){

        $category = Category::where('name', $name)->first();
        $posts = $category -> posts;

        return view('page.category', compact('category', 'posts'));
    }
}
