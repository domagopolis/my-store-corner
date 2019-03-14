<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function currencies(){
		return $this->belongsToMany('MyStoreCorner\Currency');
	}
}
