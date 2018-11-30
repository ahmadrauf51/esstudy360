<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $categories = Category::where('slug', $slug)->with('subcategory')->get();
        // return $categories;
        return view('category.index', compact('categories'));
    }
}
