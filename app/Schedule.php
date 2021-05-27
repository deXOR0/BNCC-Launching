<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'date', 
        'quota', 
        'link',
        'link2'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
