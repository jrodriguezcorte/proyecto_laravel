<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    /* An article is owner by user */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //// MUCHOS A MUCHOS /////////////
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->toArray();
    }
    ///////////////////////////////////////
}
