<?php

namespace App;

use App\Team;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function teams() {

    	return $this->belongsToMany('App\Team');
    	
    }
}
