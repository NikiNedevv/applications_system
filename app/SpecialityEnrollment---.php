<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialityEnrollment extends Model
{
	protected $fillable = ['user_id', 'ts_id', 'subject_id', 'speciality_id'];

   public function specialities()
    {
    	return $this->hasMany('App\Speciality');
    } 

}
