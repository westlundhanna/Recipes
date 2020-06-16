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
            'name' => ['required', 'min:5'],
            'ingredients' => ['required', 'min:3'],
            'description' => ['required', 'min:1'],
            'categoryId' => ['required', 'min:1'],
            'image' => ['required']
        ]);

        $attributes['ownerId'] = auth()->id();

        $recipe = Recipe::create($attributes);
        $this->storeImage($recipe);

        return redirect('/home');
    }


    public function storeImage($recipe)
    {
        if (request()->has('image')) {
            $recipe->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }

    public function readAll()
    {
        $recipes = Recipe::all();
        return view('allRecipes', ['recipes' => $recipes]);
    }

    public function readOne($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('singleRecipe', ['recipe' => $recipe]);
    }

    public function index()
    {
        $myRecipes = Recipe::where('ownerId', auth()->id())->get();
        return view('home', ['myRecipes' => $myRecipes]);
    }
    public function destroy($id)
    {
        Recipe::find($id)->delete();

        return redirect('/home');
    }
  
    public function edit($id)
    {
        $Recipe = Recipe::findOrFail($id);

        return view('/edit', ['Recipe' => $Recipe]);
    }

    public function update(Request $request, $id)
    {
        $Recipe = Recipe::findOrFail($id);

        $Recipe->name = request('name');
        $Recipe->ingredients = request('ingredients');
        $Recipe->description = request('description');
        $Recipe->categoryId = request('categoryId');
        $Recipe->image = request('image');

        if (request()->has('image')) {
            $Recipe->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }

        $Recipe->save();

        return redirect('/home');
    }
}
