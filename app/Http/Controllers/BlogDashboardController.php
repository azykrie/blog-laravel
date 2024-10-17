<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();
        
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('blog-dashboard.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('blog-dashboard.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048',
            'featured' => 'boolean',
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $imageName);
        }
    
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $imageName,
            'featured' => $request->boolean('featured'),
        ]);
    
        Alert::success('Success', 'Blog created successfully');
        return redirect('blog-dashboard');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        $category = Category::all();
        return view('blog-dashboard.edit', compact('blog', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'featured' => 'boolean',
        ]);
    
        $blog = Blog::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $imageName);

            if ($blog->image && file_exists(public_path('images/' . $blog->image))) {
                unlink(public_path('images/' . $blog->image));
            }

            $blog->image = $imageName;
        }

        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $blog->image ?? $blog->image,
            'featured' => $request->boolean('featured'),
        ]);
    
        Alert::success('Success', 'Blog updated successfully');
        return redirect('blog-dashboard');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        Alert::success('Success', 'Blog deleted successfully');
        return redirect('blog-dashboard');
    }
}
