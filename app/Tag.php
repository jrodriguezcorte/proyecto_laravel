<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    /* A user can have many articles */
    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }


}
