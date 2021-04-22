<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabania extends Model
{
    use HasFactory;

    //Relación uno a Muchos inversa
    // public function tipoCabania(){
    //     return $this->belongsTo('App\Models\TipoCabania');
    // }

    //Relación uno a Muchos 
    public function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}