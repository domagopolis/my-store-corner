<?php

namespace MyStoreCorner;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function states(){
		return $this->hasMany('MyStoreCorner\State');
	}

	public function postcodes(){
		return $this->hasMany('MyStoreCorner\Postcode');
	}

	public function stores(){
		return $this->hasMany('MyStoreCorner\Store');
	}

	public function currencies(){
		return $this->hasMany('MyStoreCorner\Currency');
	}
}
