<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installed extends Model
{
    //
    protected $fillable=[
        'software_id',
        'inventory_id'
    ];
    
  
    public function inventory(){
        return $this->belongsTo('App\Inventory');
    }

    public function software(){
        return $this->belongsTo('App\Software');
    }


}
