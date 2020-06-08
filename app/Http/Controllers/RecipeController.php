<?php

namespace App\Http\Controllers;
use App\Recipe;
use Auth;

use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function store()
    {

        $attributes = request()->validate([
            'recipesNamn' => ['required', 'min:5'],
            'recipesIngred' => ['required', 'min:3'],
            'recipesBeskrivn' => ['required', 'min:1'],
            'recipesKategori' => ['required', 'min:1']
        ]);

        $attributes['ownerId'] = auth()->id();

        Recipe::create($attributes);

        return redirect('/home');
        
    }
    // public function update()
    // {

    // }

    public function showall()
        {
            $recipes = Recipe::all();
            return view('allRecipes', ['recipes'=>$recipes]);
        }

    public function index()
    {
        $myRecipes = Recipe::where('ownerId', auth()->id())->get();
        return view('home', ['myRecipes' => $myRecipes]);
    }
    // osv
    

}
