<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable = ['name'];

	// public function subjects()
 //    {
 //        return $this->belongsToMany('App\Subject', 'specialitiesenrollments', 'speciality_id', 'subject_id');
 //    }
    public function user()
    {
        return $this->belongsToMany('App\User', 'specialitiesenrollments', 'speciality_id', 'user_id');
    }

    public function subjects(){
    	return $this->belongsToMany('App\Subject','subject_specialities','id','subject_id');
    }

    public function exams(){
    	return $this->belongsToMany('App\Exam','exams_assigned','id','exam_id');
    }
}
