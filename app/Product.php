<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function presentPrice()
    {
        return '$'.$this->price;
    }

    public static function scopeMightAlsoLike($q)
    {
        return $q->inRandomOrder()->take(4);
    }
    /*public function scopeMightAlsoLike()
    {
        return $this->inRandomOrder()->take(4);
    }*/
}
