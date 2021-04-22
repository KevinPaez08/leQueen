<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    use HasFactory;

    //Relación uno a Muchos 
    public function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }
}