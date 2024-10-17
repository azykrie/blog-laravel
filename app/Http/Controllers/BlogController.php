<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $featuredPost = Blog::where('featured', 1)->latest()->first();
        $blog = Blog::where('featured', 0)->latest()->get();
        $category = Category::all();
        return view('blog.index', compact('blog','featuredPost', 'category'));
    }
}
