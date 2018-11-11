<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    public function stores()
	{
		return $this->belongsToMany('App\Store');
	}
}
