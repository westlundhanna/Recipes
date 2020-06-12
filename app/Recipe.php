<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $primaryKey = 'id'; 

    protected $fillable = [
        'ownerId',
        'recipesNamn', 
        'recipesIngred', 
        'recipesBeskrivn',
        'categoryId',
        'image'
    ]; 

    public function recipe()
    {
        // $recipe = Recipe::with('category')->lists('categoryNamn', 'id');
        return $this->belongsTo(Category::class, 'id');
        // $content = Content::with('category')->lists('category.name', 'id');
    }

}

// return view('recept');