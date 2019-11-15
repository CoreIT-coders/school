<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public $timestamps = false;
    
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
        return $this->hasOne('App\Student');
    }
}
