<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function like(){
        return $this->hasMany('App\Like');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
