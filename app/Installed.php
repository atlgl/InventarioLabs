<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installed extends Model
{
    //
    protected $fillable=[
        'software_id',
        'computers_id'
    ];

    public function computer(){
        return $this->belongsTo('App\Computer');
    }

    public function software(){
        return $this->belongsTo('App\Software');
    }


}
