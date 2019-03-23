<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function store(){
        return $this->belongsTo('MyStoreCorner\Store');
    }

    public function currencies(){
        return $this->belongsToMany('MyStoreCorner\Currency');
    }

    public function prices(){
        return $this->hasMany('MyStoreCorner\ProductPrice');
    }
}
