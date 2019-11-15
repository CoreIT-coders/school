<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function School()
    {
        return $this->belongsTo('App\School');
    }
}
