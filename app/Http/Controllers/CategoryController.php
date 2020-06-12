<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function showCategory()
    {
        $category = Category::where('categoryId', 'recipesCategory');
        return view('recept', ['recipes' => $category]);
    }
}
