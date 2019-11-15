<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abbsent extends Model
{
    public function School()
    {
        return $this->belongsTo('App\School');
    }
    public function Student()
    {
        return $this->belongsTo('App\Student');
    }
}
