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

}
