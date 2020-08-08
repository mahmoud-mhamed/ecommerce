<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function products()
    {
        protected $table = 'category';
        return $this->belongsToMany('App\Product');
    }
}
