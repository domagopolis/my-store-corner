<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function states(){
		return $this->hasMany('App\State');
	}

	public function postcodes(){
		return $this->hasMany('App\Postcode');
	}

	public function stores(){
		return $this->hasMany('App\Store');
	}
}
