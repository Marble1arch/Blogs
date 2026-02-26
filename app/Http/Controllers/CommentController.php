<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request,Comment $comment){
        $validated = $request->validate([
            "Author" =>["required","max:255"],
            "text" =>["required","max:255"],
            "blog_id" =>["required","max:255"]
        ]);
        Comment::create([
            "title" => $validated["Author"],
            "content" => $validated["text"],
            "date" => date("y-m-j"),
            "blog_id" => $validated["blog_id"]
        ]);
        return redirect("/blogs/$comment->blog_id");
    }
    public function edit(Comment $comment){
        return view("comments.edit",compact("comment"));
    }
    public function update(Request $request,Comment $comment){
        $validated = $request->validate([
            "author" =>["required","max:255"],
            "text" =>["required","max:255"]
        ]);
        $comment->title = $validated["author"];
        $comment->content = $validated["text"];
        $comment->save(); 
        return redirect("/blogs/$comment->blog_id");  
    }
    public function destroy(Comment $comment){
        $comment->delete();
        return redirect("/blogs/$comment->blog_id");
    }
}

