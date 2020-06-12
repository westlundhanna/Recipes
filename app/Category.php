<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $primaryKey = 'id'; 

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
        
        // $category = App\Recipe::find()->categoryId;

    }
}


