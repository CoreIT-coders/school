<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public $timestamps = false;
    
    public function School()
    {
        return $this->belongsTo('App\School');
    }
    //////////////////////////////////
    public function Matrix()
    {
        return $this->hasMany('App\Matrix');
    }
    public function Degree()
    {
        return $this->hasMany('App\Degree');
    }
    public function Student()
    {
        return $this->hasMany('App\Student');
    }
    public function Library()
    {
        return $this->hasMany('App\Library');
    }
}
