<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'nim', 
        'campus', 
        'major',
        'phone_number',
        'line_id',
        'schedule_id',
        'lnt_subject',
        'gender',
        'address',
        'city',
        'place_of_birth',
        'date_of_birth',
        'fyp_batch',
        'session',
        'is_reregistered'
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

    public function schedule(){
        return $this->belongsto(Schedule::class);
    }
}
