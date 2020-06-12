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
        return $this->belongsTo(Category::class, 'id');
    }

}

// return view('recept');