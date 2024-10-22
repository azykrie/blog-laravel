<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $featuredPost = Blog::where('featured', 1)->latest()->first();

        // Mulai query
        $query = Blog::where('featured', 0)->latest();

        // Filter berdasarkan kategori jika ada
        if ($request->filled('category')) {
            $categoryId = $request->input('category');
            $query->where('category_id', $categoryId);
        }

        // Filter berdasarkan pencarian jika ada
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        $blog = $query->paginate(6);
        $categories = Category::all();

        return view('blog.index', compact('blog', 'featuredPost', 'categories'));
    }

    public function show($id)
    {
        $post = Blog::findOrFail($id);  // Mengambil postingan berdasarkan ID
        $recentPosts = Blog::latest()->take(3)->get();  // Mengambil 3 postingan terbaru
        $categories = Category::all();  // Mengambil semua kategori
        
        return view('blog.detail', compact('post', 'recentPosts', 'categories'));
    }
    

}
