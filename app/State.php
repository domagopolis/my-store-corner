<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	public function country(){
		return $this->belongsTo('App\Country');
	}

	public function postcodes(){
		return $this->hasMany('App\Postcode')->orderBy('name');
	}

	public function stores(){
		return $this->hasMany('App\Store');
	}
}
