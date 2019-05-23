<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    public function result()
    {
        return $this->hasOne('App\Result');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
