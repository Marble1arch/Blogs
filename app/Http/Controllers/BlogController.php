<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
        public function index()
    {
        $blogs = Blog::all();
        return view("blog.index", compact("blogs"));
    }
    public function show(Blog $blog){
        $categories = Category::with('blogs')->get();
        return view("blog.show",compact("blog"));
    }
    public function create(){
        $categories = Category::all();
        return view("blog.create",compact('categories'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            "title" =>["required","max:255"],
            "content" =>["required","max:255"],
            "catid" =>["required"]
        ]);
        Blog::create([
            "title" => $validated["title"],
            "content" => $validated["content"],
            "categories_id" => $validated["catid"]
        ]);
        return redirect("/blogs");
    }
    public function edit(Blog $blog){
        return view("blog.edit",compact("blog"));
    }
    public function update(Request $request,Blog $blog){
        $validated = $request->validate([
            "title" =>["required","max:255"],
            "content" =>["required","max:255"],
        ]);
        $blog->title = $validated["title"];
        $blog->content = $validated["content"];
        $blog->save(); 
        return redirect("/blogs/$blog->id");  
    }
            public function destroy(Blog $blog){
        $blog->delete();
        return redirect("/blogs");
    }
}
