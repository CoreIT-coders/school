<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterInfo extends Model
{    
    public function School()
    {
        return $this->belongsTo('App\School');
    }
}
