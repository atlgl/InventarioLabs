<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    //
    protected $fillable=[
        'desc',
        'compid'
    ];
    public function computer(){
        return $this->belongTo('App\Computer');
    }
}
