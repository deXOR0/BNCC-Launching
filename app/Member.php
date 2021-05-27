<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'bncc_id', 
        'nim',
        'name',
        'password',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'email',
        'phone_number',
        'line_id',
        'github_id',
        'linkedin_id',
        'campus',
        'lnt_subject',
    ];
}
