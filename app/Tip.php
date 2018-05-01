<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    
    public function activities()
    {
        return $this->hasMany('App\Activity')->withTimestamps();
    }

    public function ratings()
    {
        return $this->belongsTo('App\Rating')->withTimestamps();
    }

    public function step()
    {
    	return $this->hasOne('App\Step');
    }
}
