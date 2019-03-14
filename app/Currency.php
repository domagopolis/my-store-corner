<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function country(){
		return $this->belongsTo('MyStoreCorner\Country');
	}

	public function products(){
		return $this->belongsToMany('MyStoreCorner\Product');
	}
}
