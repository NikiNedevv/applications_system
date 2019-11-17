<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSession extends Model
{
    public function specialities()
    {
    	return $this->belongsToMany('App\Speciality');
    }
    
}
