<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSession extends Model
{
    public function course()
    {
    	return $this->belongsToMany('App\Speciality');
    }
}
