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
            'categoryId' => ['required', 'min:1'],
            'image' => ['required']
        ]);
        // , function () {
        //     if(request()->hasFile('image')) {
        //         // request()->validate([
        //             'image' => ['file|image|max:5000'],
        //         // ]);
        //     }
        // });

        $attributes['ownerId'] = auth()->id();

        $recipe = Recipe::create($attributes);
        $this->storeImage($recipe);

        return redirect('/home');
        
    }
    public function storeImage($recipe)
    {
        if(request()->has('image')) {
            $recipe->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }

    public function readAll()
    {
        $recipes = Recipe::all();
        return view('allRecipes', ['recipes'=>$recipes]);
    }

    public function readOne($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('singleRecipe', ['recipe'=>$recipe]);
    }

    public function index()
    {
        $myRecipes = Recipe::where('ownerId', auth()->id())->get();
        return view('home', ['myRecipes' => $myRecipes]);
    }
    // osv

    
    public function destroy($id)
    {
        Recipe::find($id)->delete();

        return redirect('/home');
    }

    // Edit Function 
    public function edit($id)
    {
        $Recipe = Recipe::findOrFail($id);
 
       return view('/edit', ['Recipe'=> $Recipe]);
    }
 
    public function update(Request $request, $id)
    {
        $Recipe = Recipe::findOrFail($id);
        //$this->authorize('update',$Recipe);
 
        $Recipe->recipesNamn = request('recipesNamn');
        $Recipe->recipesIngred = request('recipesIngred');
        $Recipe->recipesBeskrivn = request('recipesBeskrivn');
        $Recipe->categoryId = request('categoryId');
     
        $Recipe->save();
        
        return redirect('/home');
    }
}

