<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('active','1')->with('subcategory')->latest()->get();
        // return $categories;
        return view('Home/index', compact('categories'));
    }
}
