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

    public function category()
    {
        return $this->belongsTo('App\Category', 'id');
    }

}

// return view('recept');