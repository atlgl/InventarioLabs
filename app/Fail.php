<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fails extends Model
{
    //
     protected $fillable = [
        'compid',
        'desc',
        'failtype',

    ];
    
    protected $table='Fails';

    public function computer(){
        return $this->belongsTo('App\Computer');
    }

}
