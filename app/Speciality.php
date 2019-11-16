<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable = ['name'];

	public function subject()
    {
    	return $this->hasMany('App\Subject');
    }

    public function testsession()
    {
    	return $this->hasMany('App\TestSession');
    }
}
