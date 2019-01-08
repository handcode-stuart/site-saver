<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $fillable = ['user_id', 'url', 'name'];

    /**
     *
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
