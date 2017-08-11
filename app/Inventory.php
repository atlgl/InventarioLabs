<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $fillables=[
        'user_id',
        'computers_id',
        'lab_id'
    ];

    public function computer(){
        return $this->belongsTo('App\Computer');
    }

    public function lab(){
        return $this->belongsTo('App\Lab');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
