<?php

namespace App\Http\Controllers;
use App\Recipe;
use Auth;

use Illuminate\Http\Request;

class RecipeController extends Controller
{   

    public function store()
    {
        
        $attributes['   '] = auth()->id();
        $recipe = Recipe::create($this->validatedData());
        
        $this->storeImage($recipe);
        
        event(new NewRecipeHasRegisteredEvent($recipe));
        
        return redirect('/home');   
        // $attributes = request()->validate([
            //     'recipesNamn' => ['required', 'min:5'],
            //     'recipesIngred' => ['required', 'min:3'],
            //     'recipesBeskrivn' => ['required', 'min:1'],
            //     'categoryId' => ['required', 'min:1']
            // ]);
            // $this ->storeImage($recipe)
            
            // if(request()->hasFile('image')){
                //     // request()->image);
                //     request()->validate([
                    //         'image' => 'file|image|max:5000',
                    //     ]);
                    // }    
                    
                    // return $attributes;
                    
                    
                    // $recipe = Recipe::  ($attributes);
                    
                    // return redirect('/home');
                    
    }
    

    public function validatedData() 
    {
        return tap(request()->validate([
            'recipesNamn' => ['required', 'min:5'],
            'recipesIngred' => ['required', 'min:3'],
            'recipesBeskrivn' => ['required', 'min:1'],
            'categoryId' => ['required', 'min:1']
        ]),
        function(){
            if(request()->hasFile('image')){
                // request()->image);
                request()->validate([
                    'image' => 'file|image|max:5000',
                ]);
            }
        });

        // $attributes = request()->validate([
        //     'recipesNamn' => ['required', 'min:5'],
        //     'recipesIngred' => ['required', 'min:3'],
        //     'recipesBeskrivn' => ['required', 'min:1'],
        //     'categoryId' => ['required', 'min:1']
        // ]);
        // $this ->storeImage($recipe)

        // if(request()->hasFile('image')){
        //     // request()->image);
        //     request()->validate([
        //         'image' => 'file|image|max:5000',
        //     ]);
        // }    

        // return $attributes;

        // 'ownerId'-> auth()->id();

        // $recipe = Recipe::  ($attributes);

        // return redirect('/home');


    }
    public function storeImage($recipe)
    {
        if(request()->has('image')) {
            $recipe->update([
                'image' => request()->image->store('img', 'public'),
            ]);
        }
    }


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

    
    // Delete function
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

        $this->storeImage($recipe);
     
        $Recipe->save();
        
        return redirect('/home');
    }
}

