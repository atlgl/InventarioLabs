<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
     protected $fillable = [
        'modelname',
        'desc',
        'mark_id'
    ];

    public function fail(){
        return $this->hasMany('App\Fail');
    }
    public function lost(){
        return $this->hasMany('App\Lost');
    }

    public function mark(){
        return $this->belongsTo('App\Mark');
    }

    public function installed(){
        return $this->hasMany('App\Installed');
    }

    public function inventory(){
        return $this->hasMany('App\Inventory');
    }

}
