<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'secondname',
        'lastname',
        'birhtdate',
        'photo'
    ];

    public function user(){
          return $this->hasMany('App\User');
    }
}
