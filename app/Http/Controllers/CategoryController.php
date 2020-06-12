<?php

namespace App\Http\Controllers;
use App\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function filterCategory($categories = '1, 2, 3, 4')
    {
        // $category = Recipe::where('id', 'recipesNamn');
        // return view('category', ['recipes' => $category]);
        $categories = explode(',', $categories);
        foreach($categories as $category){
            $this->builder->whereHas('categories', function($query) use ($category){
                // return $this->hasManyThrough('App\Recipe');
                return $query->where('id', $category);
            });
        }
    }
}


