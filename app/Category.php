<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['alias', 'title'];

    // Товары выбранной категории
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
