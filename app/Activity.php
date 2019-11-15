<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function School()
    {
        return $this->belongsTo('App\School');
    }
    //////////////////////////////////////
    public function Student()
    {
        return $this->hasMany('App\Student');
    }
}
