<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $primaryKey = 'recipesId'; 

}
// $recipes = App\Recipe::all();

// foreach($recipes as $recipe) {
//     echo $recipe->recipesNamn;
// }

return view('recept');