<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

class CategoryController extends Controller
{
    public function index($category,$id)
    {
        $categories = SubCategory::where('category_id', $id)->get();
        return view('category.index', compact('categories'));
    }
}
