<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("categories.index", compact("categories"));
    }
    public function show(Category $category){
        return view("categories.show",compact("category"));
    }
    public function create(Category $category){
        return view("categories.create", compact("category"));
    }
    public function store(Request $request){
        $validated = $request->validate([
            "title" =>["required","max:255"],
        ]);
        Category::create([
            "title" => $validated["title"],
        ]);
        return redirect("/categories");
    }
    public function edit(Category $category){
        return view("categories.edit",compact("category"));
    }
    public function update(Request $request,Category $category){
        $validated = $request->validate([
            "title" =>["required","max:255"],
        ]);
        $category->title = $validated["title"];
        $category->save(); 
        return redirect("/categories/$category->id");  
    }
            public function destroy(Category $category){
        $category->delete();
        return redirect("/categories");
    }
}
