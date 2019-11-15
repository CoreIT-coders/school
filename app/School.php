<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public $timestamps = false;

    public function Abbsent()
    {
        return $this->hasMany('App\Abbsent');
    }
    public function Activity()
    {
        return $this->hasMany('App\Activity');
    }
    public function Classroom()
    {
        return $this->hasMany('App\Classroom');
    }
    public function Degree()
    {
        return $this->hasMany('App\Degree');
    }
    public function Father()
    {
        return $this->hasMany('App\Father');
    }
    public function Library()
    {
        return $this->hasMany('App\Library');
    }
    public function Matrix()
    {
        return $this->hasMany('App\Matrix');
    }
    public function News()
    {
        return $this->hasMany('App\News');
    }
    public function Payment()
    {
        return $this->hasMany('App\Payment');
    }
    public function RegisterInfo()
    {
        return $this->hasMany('App\RegisterInfo');
    }
    public function Student()
    {
        return $this->hasMany('App\Student');
    }
    public function Teacher()
    {
        return $this->hasMany('App\Teacher');
    }
}
