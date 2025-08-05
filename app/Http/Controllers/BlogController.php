<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user', 'categories', 'tags', 'blogImages')
            ->where('is_published', true)
            ->latest()
            ->paginate(10);
    
        $categories = Category::all();
        $tags = Tag::all();
    
        $featured = Blog::with(['blogImages' => function ($query) {
            $query->oldest();
        }])
        ->where('is_published', true)
        ->has('blogImages')
        ->latest()
        ->take(3)
        ->get(['id', 'slug', 'title', 'created_at']);
    
        return view('frontend.blog.blog', compact('blogs', 'categories', 'tags', 'featured'));
    }

    public function show($slug)
    {
        $blog = Blog::with([
                'user',
                'categories',
                'tags',
                'blogImages',
                'blogComments' => fn ($q) => $q->where('approved', true)->latest()
            ])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $categories = Category::all();
        $tags = Tag::all();
    
        $featured = Blog::with(['blogImages' => function ($query) {
            $query->oldest();
        }])
        ->where('is_published', true)
        ->has('blogImages')
        ->latest()
        ->take(3)
        ->get(['id', 'slug', 'title', 'created_at']);

        $blog->increment('views_count');

        return view('frontend.blog.blog-view', compact('blog', 'categories', 'tags', 'featured'));
    }

    public function storeComment(Request $request, Blog $blog)
    {
        $request->validate([
            'content' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'website' => 'nullable|url',
        ]);
    
        $blog->blogComments()->create([
            'content' => $request->input('content'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'website' => $request->input('website'),
        ]);
    
        return response()->json(['message' => 'Comment submitted successfully.']);
    }

    public function showByCategory(Category $category)
    {
        $blogs = Blog::whereHas('categories', function ($query) use ($category) {
            $query->where('slug', $category->slug);
        })
        ->with(['categories', 'user', 'blogImages'])
        ->latest()
        ->paginate(10);

        $featured = Blog::with('blogImages')->latest()->take(3)->get();
        $categories = Category::all();

        return view('frontend.blog.blog', compact('blogs', 'categories', 'featured'));
    }
}
