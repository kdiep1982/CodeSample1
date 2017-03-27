<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    protected $table = 'medias';
    public $primaryKey='id';

    public function casts(){
        return $this->belongsToMany('App\Models\Cast')->withTimestamps();
    }

    public function genres(){
        return $this->hasOne('App\Models\Genre');
    }

    public function companies(){
        return $this->hasOne('App\Models\Company');
    }

    public function reviews(){
        return $this->belongsToMany('App\Models\Review')->withTimestamps();
    }



}
