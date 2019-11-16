<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function isAdmin()
    {
        return is_null(Auth::user()->role)?false:true;
    }

    public function specialities()
    {
        return $this->belongsToMany(Specialities::class,'specialitiesenrollments','user_id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subjects::class,'specialitiesenrollments','user_id'); 
    }
    public function testsessions()
    {
        return $this->belongsToMany(Subjects::class,'specialitiesenrollments','user_id'); 
    }
}
