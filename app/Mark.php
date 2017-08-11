<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    //
    protected $fillable=[
        'name'
    ];

    public function computer(){
        return $this->belongsTo('App\Computer');
    }
}
