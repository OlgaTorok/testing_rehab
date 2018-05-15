<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    public function activities()
    {
        return $this->belongsToMany('App\Activity')->withTimestamps();
    }

    public function tip()
    {
    	return $this->belongsTo('App\Tip')->withTimestamps();
    }
}
