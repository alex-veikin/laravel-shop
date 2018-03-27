<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'title', 'description', 'image'];

    // Категория товара
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // Опции товара
    public function options()
    {
        return $this->belongsToMany('App\Option', 'option_product');
    }

    // Рекомендуемые товары
    public function recommended()
    {
        return $this->belongsToMany('App\Product', 'recommended_products', 'recommended_id');
    }
}
