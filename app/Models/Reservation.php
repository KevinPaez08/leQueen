<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    //Relación uno a Muchos inversa
    public function cabania(){
        return $this->belongsTo('App\Models\Cabania');
    }

    //Relación uno a Muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Relación uno a Muchos inversa
    public function metodoPago(){
        return $this->belongsTo('App\Models\MetodoPago');
    }
}