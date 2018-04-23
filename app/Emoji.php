<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emoji extends Model
{
  protected $table = 'emojis';
  
    public function activities()
    {
        return $this->hasMany('App\Activity')->withTimestamps();
    }
}
