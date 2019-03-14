<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
	public function state(){
		return $this->belongsTo('MyStoreCorner\State');
	}

	public function stores(){
		return $this->hasMany('MyStoreCorner\Store');
	}
}
