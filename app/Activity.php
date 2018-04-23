<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    public function steps(){
        return $this->belongsToMany('App\Step');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function rating(){
        return $this->belongsTo('App\Rating');
    }

    public function emoji(){
        return $this->belongsTo('App\Emoji');
    }

    public function tip(){
        return $this->belongsTo('App\Tip');
    }
}
