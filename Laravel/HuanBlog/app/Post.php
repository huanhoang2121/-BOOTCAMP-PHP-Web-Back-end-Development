<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $timestamps = false;


    public function category(){
        return $this->belongsTo('App\Category');
    }
}
