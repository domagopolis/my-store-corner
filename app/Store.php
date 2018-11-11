<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	public function country(){
		return $this->belongsTo('App\Country');
	}

	public function state(){
		return $this->belongsTo('App\State');
	}

	public function postcode(){
		return $this->belongsTo('App\Postcode');
	}

	public function trades(){
		return $this->belongsToMany('App\Trade');
	}
}
