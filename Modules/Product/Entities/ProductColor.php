<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model 
{

    protected $table = 'color_product';
    public $timestamps = true;

    protected $fillable = ['product_id', 'color_id', 'price'];

}