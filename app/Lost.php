<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    //
    protected $fillable=[
        'desc',
        'inventory_id'
    ];
 
    public function computer(){
        return $this->belongsTo('App\Computer');
    }
    
    public function inventory(){
        return $this->belongsTo('App\Inventory');
    }
}
