<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'reviews';

    public function medias(){
        return $this->belongsToMany('App\Models\Media');
    }

}
