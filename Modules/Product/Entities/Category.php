<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
    protected $table = 'categories';
    public $timestamps = true;

    protected $fillable = ['title', 'description', 'image'];

    public function products()
    {
        return $this->hasMany('Modules\Product\Entities\Product', 'category_id');
    }

}