<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    //
    protected $fillable=[
        'name',
        'desc'
    ];
    
    protected $table='labs';

    public function inventory(){
        return $this->hasMany('App\Inventory');
    }
}
