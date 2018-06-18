<?php

namespace App;

use App\Player;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players() {

    	return $this->belongsToMany('App\Player');

    }

    public function league() {

    	return $this->belongsTo('App\League');

    }

    public function player_count() {

    	return $this->withCount('players')->get();
    	
    }
}
