<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCabania extends Model
{
    use HasFactory;

    //Relación uno a Muchos 
    // public function cabanias(){
    //     return $this->hasMany('App\Models\Cabania');
    // }
}