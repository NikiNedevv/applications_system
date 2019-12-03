<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialityEnrollment extends Model
{
	protected $table = 'specialitiesenrollments';
	protected $fillable = ['user_id', 'ts_id', 'subject_id', 'speciality_id'];

   public function specialities()
    {
    	return $this->hasMany('App\Speciality');
    }

    public function exam(){
    	return $this->hasOne('App\Exam','id','exam_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

}
