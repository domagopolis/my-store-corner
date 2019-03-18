<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	public $timestamps = false;
	
	public function country(){
		return $this->belongsTo('MyStoreCorner\Country');
	}

	public function postcodes(){
		return $this->hasMany('MyStoreCorner\Postcode')->orderBy('name');
	}

	public function stores(){
		return $this->hasMany('MyStoreCorner\Store');
	}
}
