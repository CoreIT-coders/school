<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $timestamps = false;
    
    public function School()
    {
        return $this->belongsTo('App\School');
    }
    ///////////////////////////////////////
    public function Library()
    {
        return $this->hasMany('App\Library');
    }
}
