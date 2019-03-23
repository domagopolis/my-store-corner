<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	public function postcode(){
		return $this->belongsTo('MyStoreCorner\Postcode');
	}

	public function trades(){
		return $this->belongsToMany('MyStoreCorner\Trade');
	}

    public function products(){
        return $this->hasMany('MyStoreCorner\Product');
    }

	public function store_pages(){
		return $this->hasMany('MyStoreCorner\StorePage');
	}
}
