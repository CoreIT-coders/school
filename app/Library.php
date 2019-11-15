<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
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
    public function Teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
}
