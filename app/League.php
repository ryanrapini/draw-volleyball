<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class League extends Model
{
    public function teams() {
    	return $this->hasMany('App\Team');
    }
}
