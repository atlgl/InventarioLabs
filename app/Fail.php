<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fail extends Model
{
    //
     protected $fillable = [
        'inventory_id',
        'desc',
        'failtype',
        'failstate'
    ];
    
    protected $table='fails';

    public function inventory(){
        return $this->belongsTo('App\Inventory');
    }

}
