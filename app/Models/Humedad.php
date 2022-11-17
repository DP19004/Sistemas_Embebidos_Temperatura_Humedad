<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humedad extends Model
{
    use HasFactory;
    //protected $fillable = ['valor'];

    //relacion uno a uno (Humedad se encuentra en un Registro)
    public function Registro(){
        return $this->hasOne('App\Models\Registro');
    }
}
