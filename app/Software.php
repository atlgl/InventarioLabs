<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $fillable=[
        'name',
        'desc',
    ];

    public function installed(){
        return $this->hasMany('App\Installed');
    }
}
