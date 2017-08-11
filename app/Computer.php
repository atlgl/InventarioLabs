<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
     protected $fillable = [
        'name',
        'desc',
        'barcode',
        'marks_id'
    ];

    public function fail(){
        return $this->hasMany('App\Fail');
    }
    public function lost(){
        return $this->hasMany('App\Lost');
    }

    public function mark(){
        return $this->hasMany('App\Mark');
    }

    public function installed(){
        return $this->hasMany('App\Installed');
    }

    public function inventory(){
        return $this->hasMany('App\Inventory');
    }

}
