<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Color extends Model 
{
    protected $table = 'colors';
    public $timestamps = true;

    protected $fillable = ['value'];

    public function products()
    {
        return $this->belongsToMany('Modules\Product\Entities\Product');
    }

}