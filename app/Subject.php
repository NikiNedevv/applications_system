<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $fillable = ['name', 'speciality_id'];
    // public function specialities()
    // {
    // 	return $this->belongsToMany('App\Speciality', 'specialitiesenrollments', 'speciality_id', 'subject_id');
    // }
    // public function user()
    // {
    //     return $this->belongsToMany('App\User', 'specialitiesenrollments', 'subject_id', 'user_id');
    // }

    public function speciality()
    {
    	return $this->belongsTo('App\Speciality');
    }
}
