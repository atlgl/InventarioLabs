<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $fillable=[
        'user_id',
        'computer_id',
        'lab_id',
        'barcode',
        'inventorystate'
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
    
    public function fail(){
        return $this->hasMany('App\Fail');
    }
    
    public function installed(){
        return $this->hasMany('App\Installed');
    }
    
    public function lost(){
        return $this->hasMany('App\Lost');
    }
    
    
    
}
