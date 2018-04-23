<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function activities()
    {
        return $this->hasMany('App\Activity')->withTimestamps();
    }
}
