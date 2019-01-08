<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $fillable = ['name'];

    /**
     *
     */
    public function sites()
    {
        return $this->belongsToMany('App\Site');
    }

    /**
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
