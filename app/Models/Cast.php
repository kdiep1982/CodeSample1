<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    //
    protected $table = 'casts';
    public $primaryKey='id';

    public function medias(){
        return $this->belongsToMany('App\Models\Media')->withTimestamps();
    }
}
