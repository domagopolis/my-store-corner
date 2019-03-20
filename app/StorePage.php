<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class StorePage extends Model
{
    public function store(){
        return $this->belongsTo('MyStoreCorner\Store');
    }
}
