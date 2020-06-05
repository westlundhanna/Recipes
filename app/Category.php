<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $primaryKey = 'categoryId'; 

    public function recipes()
    {
        return $this->hasMany('App\Recipe');
    }
}


