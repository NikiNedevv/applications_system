<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function course()
    {
    	return $this->belongsToMany('App\Speciality');
    }
}
