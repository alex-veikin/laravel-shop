<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    // Товары имеющие текущую опцию
    public function products()
    {
        return $this->belongsToMany('App\Product', 'option_product');
    }
}
