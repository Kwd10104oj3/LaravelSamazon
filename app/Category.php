<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasmany('App\Product');
    }
    
    public function major_categories()
    {
        $this->belongsTo('App/MajorCategory');
    }
}
