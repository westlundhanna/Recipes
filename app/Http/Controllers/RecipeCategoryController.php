<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Category;

use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    public function store(Recipe $recipe)
    {
        $recipe->addCategory(request('categoryId'));
        
    }

}
