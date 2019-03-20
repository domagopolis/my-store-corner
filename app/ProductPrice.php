<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    public $timestamps = false;
    
    public function product(){
        return $this->belongsTo('MyStoreCorner\Product');
    }

    public function currency(){
        return $this->belongsTo('MyStoreCorner\Currency');
    }
}
