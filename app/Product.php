<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function currencies(){
		return $this->belongsToMany('App\Currency');
	}
}
