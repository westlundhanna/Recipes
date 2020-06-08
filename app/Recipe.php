<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $primaryKey = 'recipesId'; 

    protected $fillable = [
        'ownerId',
        'recipesNamn', 
        'recipesIngred', 
        'recipesBeskrivn',
        'recipesKategori'
    ]; 

    public function recipe()
    {
        return $this->hasMany('App\Recipe');
    }

}

// return view('recept');