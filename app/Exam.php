<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function subject(){
    	return $this->hasOne('App\Subject','id','subject_id');
    }
}
