<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function School()
    {
        return $this->belongsTo('App\School');
    }
    public function Classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
    public function Degree()
    {
        return $this->belongsTo('App\Degree');
    }
    public function Activity()
    {
        return $this->belongsTo('App\Activity');
    }

    public function Payment()
    {
        return $this->hasOne('App\Payment');
    }

}
