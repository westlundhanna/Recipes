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

        // $recipe = new Recipe();
        // $recipe->owner_id = auth()->id();
        // $recipe->recipesNamn = request('title');
        // $recipe->recipesIngred = request('ingredients');
        // $recipe->recipesBeskrivn = request('description');

        // $recipe->save();

        return redirect('/home');
        
        // Recipe::create([

        //     'owner_id' => Auth::user()->id,
        //     'recipeNamn' => $request->title,
        //     'recipeIngred' => $request->ingredients,
        //     'recipeBeskrivn' => $request->description
        //     // 'recipeKategori' => $request->recipeKategori,
        // ]);
    
        // return redirect('/home');
    }
    // public function update()
    // {

    // }

    public function showall()
        {
            $recipes = Recipe::all();
            return view('recept', ['recipes'=>$recipes]);
        }
    // osv
}
