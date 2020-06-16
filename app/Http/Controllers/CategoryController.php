<?php

namespace App\Http\Controllers;
//use App\Recipe;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function filterCategory(Request $request)
    {

        $id = $request->input('category');

        $category = Category::with('recipes')->findOrFail($id);
        return view('category', [ 'category' => $category]);


        //testar dessa:
        // $category = Category::with('recipes')->where('categoryId')->findOrFail($id);
        // return view('category', [ 'category' => $category ]);

        // $category = Recipe::where('categoryId')->findOrFail($id);
        // return view('category', [ 'category' => $category ]);

        // $comment = App\Post::find(1)->comments()->where('title', 'foo')->first();
        
    }
}