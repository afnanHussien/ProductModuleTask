<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    protected $table = 'products';
    public $timestamps = true;
    
    protected $fillable = ['title', 'description', 'image', 'category_id'];

    public function category()
    {
        return $this->belongsTo('Modules\Product\Entities\Category', 'category_id');
    }

    public function colors()
    {
        return $this->belongsToMany('Modules\Product\Entities\Color')->withPivot('price');
    }

}