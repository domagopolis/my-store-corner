<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
	public function country(){
		return $this->belongsTo('App\Country');
	}

	public function state(){
		return $this->belongsTo('App\State');
	}

	public function stores(){
		return $this->hasMany('App\Store');
	}
}
