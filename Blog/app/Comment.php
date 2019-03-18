<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
