<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
        public function index()
    {
        $blogs = Blogs::all();
        return view("blog.index", compact("blogs"));
    }
    public function show(Blogs $blog){
        return view("blog.show",compact("blog"));
    }
    public function create(Blogs $blog){
        return view("blog.create", compact("blog"));
    }
    public function store(Request $request){
        $validated = $request->validate([
            "title" =>["required","max:255"],
            "content" =>["required","max:255"]
        ]);
        Blogs::create([
            "title" => $validated["title"],
            "content" => $validated["content"]
        ]);
        return redirect("/blogs");
    }
    public function edit(Blogs $blog){
        return view("blog.edit",compact("blog"));
    }
    public function update(Request $request,Blogs $blog){
        $validated = $request->validate([
            "title" =>["required","max:255"],
            "content" =>["required","max:255"]
        ]);
        $blog->title = $validated["title"];
        $blog->content = $validated["content"];
        $blog->save(); 
        return redirect("/blogs/$blog->id");  
    }
            public function destroy(Blogs $blog){
        $blog->delete();
        return redirect("/blogs");
    }
}
