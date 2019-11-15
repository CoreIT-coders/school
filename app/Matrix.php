<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    
    public function School()
    {
        return $this->belongsTo('App\School');
    }
    public function Classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
    /////////////////////////////////
    public function Student()
    {
        return $this->hasMany('App\Student');
    }
}
