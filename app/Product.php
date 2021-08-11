<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belong('App\Category');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
