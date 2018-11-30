<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Subcategory;

class PostController extends Controller
{
    public function index($subcategory,$slug)
    {
        $subcategories = Subcategory::where('slug',$subcategory)->with('posts')->get();
        $post                   = Post::where('slug',$slug)->with('subcategory')->get();
        return view('Post.index', compact('post','subcategories'));
    }
}
