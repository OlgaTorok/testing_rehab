<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function activities()
    {
        return $this->hasMany('App\Activity')->withTimestamps();
    }

    public function tips()
    {
        return $this->hasMany('App\Tip')->withTimestamps();
    }
}
