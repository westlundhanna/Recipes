<?php

namespace App\Http\Controllers;
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
        
    }
}