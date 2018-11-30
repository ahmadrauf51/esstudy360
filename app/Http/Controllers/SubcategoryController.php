<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class SubcategoryController extends Controller
{
    public function index($slug)
    {
        $subcategories = Subcategory::where('slug',$slug)->with('posts')->pluck('title');
        return $subcategories;
        return view('page.index', compact('subcategories'));
    }
}
